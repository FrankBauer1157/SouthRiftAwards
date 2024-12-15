<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\DuplicateVoter;
use App\Models\VoteUserInfo;
use App\Models\Category;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class VoteController extends Controller
{


    public function vote(Request $request)
    {
        if ($request->cookie('voted')) {
            return response()->json(['message' => 'You have already voted.'], 403);
        }
        // Validate the input to ensure nominee_id and identifier (email/phone/IP) are provided
        $validator = Validator::make($request->all(), [
            'nominee_id' => 'required|exists:nominees,id',  // Make sure nominee exists in the database
            'identifier' => 'required|string',  // identifier can be email, phone, or unique string
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Check if the user has already voted for the same nominee
        $existingVote = Vote::where('nominee_id', $request->nominee_id)
                            ->where('identifier', $request->identifier)
                            ->first();

        if ($existingVote) {
            // If a vote already exists, reject the request
            return response()->json([
                'message' => 'You have already voted for this nominee.',
            ], 403);  // HTTP Status 403 Forbidden
        }

        // If validation passes and no previous vote is found, store the vote
        Vote::create([
            'nominee_id' => $request->nominee_id,
            'identifier' => $request->identifier,
        ]);

        // Return success message after storing the vote
        return response()->json(['message' => 'Vote recorded successfully!']);
    }
    public function index()
{
    $categories = Category::where('status', 'active')->get();
    // $categories = Category::with('contestants')->get();
    return view('vote', compact('categories'));

}
public function index2()
{
    $categories = Category::where('status', 'active')->get();
    // $categories = Category::with('contestants')->get();
    return view('vote2', compact('categories'));

}

public function store(Request $request)
{
    $request->validate([
        'contestant_id' => 'required|exists:contestants,id',
        'category_id' => 'required|exists:categories,id',
        'voter_identifier' => 'required|string|max:255',
    ]);

    // Prevent duplicate voting
    $existingVote = Vote::where('voter_identifier', $request->voter_identifier)
        ->where('category_id', $request->category_id)
        ->exists();

    if ($existingVote) {
        return redirect()->back()->with('error', 'You have already voted in this category.');
    }

    // Save vote
    Vote::create([
        'contestant_id' => $request->contestant_id,
        'voter_identifier' => $request->voter_identifier,
        'category_id' => $request->category_id,
    ]);

    return redirect()->back()->with('success', 'Thank you for voting!');
}


    public function showVotingForm()
    {
        $categories = Category::where('status', 'active')->with('contestants')->get();
    return view('vote', compact('categories'));
        // return view('vote', compact('categories'));
    }



public function submitVote(Request $request)
{
    $validated = $request->validate([
        'contestants' => 'required|array',
        'contestants.*' => 'exists:contestants,id', // assuming contestants table
    ]);

    // Check if the user has already voted by IP/MAC address
    $userInfo = VoteUserInfo::where('ip_address', $request->ip())
        ->orWhere('mac_address', $request->mac_address)
        ->first();

        if ($userInfo) {
            // Use the IPinfo API to fetch geolocation details
            $ip = $request->ip();
            $ipInfoToken = '9c75c23af5c9fd'; // Replace with your IPinfo API token
            $location = Http::get("https://ipinfo.io/{$ip}?token={$ipInfoToken}")->json();

            // Extract location data
            $country = $location['country'] ?? null;
            $region = $location['region'] ?? null;
            $city = $location['city'] ?? null;

       // Log duplicate voter attempt or update the vote_count if record exists
                DuplicateVoter::updateOrCreate(
                    [
                        'ip_address' => $ip, // Match based on IP address (or IP + user_agent for stricter matching)
                    ],
                    [
                        'mac_address' => $ip, // Assuming IP in place of MAC
                        'user_agent' => $request->userAgent(),
                        'user_id' => $userId ?? null, // Replace with actual user ID if available
                        'country' => $country,
                        'region' => $region,
                        'city' => $city,
                    ]
                )->increment('vote_count', 1);


            // Flash message for the user
            session()->flash('message', 'You have already voted! Please note that you can only vote once. Thank you for your participation.');

            return response()->json([
                'success' => false,
                'redirect' => route('sponsors'),
            ], 400);
        }


    // Store user info in voters_user_info table
    $ipAddress = $request->ip();

    // Call IPinfo API for geolocation data
    $ipInfoToken = '9c75c23af5c9fd'; // Replace with your IPinfo API token
    $ipInfoUrl = "https://ipinfo.io/{$ipAddress}/json?token={$ipInfoToken}";

    $response = Http::get($ipInfoUrl);
    $geoData = $response->json();

    // Extract city, region, and country from the API response
    $city = $geoData['city'] ?? 'Unknown';
    $region = $geoData['region'] ?? 'Unknown';
    $country = $geoData['country'] ?? 'Unknown';

    // Save data into the database
    $userInfo = new VoteUserInfo;
    $userInfo->ip_address = $ipAddress;
    $userInfo->mac_address = $ipAddress; // Storing IP in place of MAC
    $userInfo->user_Agent = $request->userAgent();
    $userInfo->user_id = 1; // Replace with the actual user_id
    $userInfo->city = $city;
    $userInfo->region = $region;
    $userInfo->country = $country;
    $userInfo->save();




    // Store votes in the votes table
    foreach ($request->contestants as $contestantId) {
        Vote::create([
            'contestant_id' => $contestantId,
            'user_info_id' => $userInfo->id,
            'category_id' => 0,
        ]);
    }
    session()->flash('message', 'Thank you for perticipating in South-Rift Matatu Awards - 2024.');
        return response()->json([
            'success' => false,
            'redirect' => route('sponsors'),
        ], 400);

    // return response()->json(['success' => true, 'message' => 'Your vote has been submitted!'], 200);
}



}
