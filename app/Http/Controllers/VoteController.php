<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Nominee;
use App\Models\VoteUserInfo;
use App\Models\Category;

use Illuminate\Support\Facades\Validator;

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

public function submitVotex(Request $request)
{
    // Validation (ensure only one vote per identifier)
    $request->validate([
        'nominee_id' => 'required|exists:nominees,id',
        'identifier' => 'required|unique:votes,identifier',
    ]);

    // Store the vote
    Vote::create([
        'nominee_id' => $request->nominee_id,
        'identifier' => $request->identifier,
    ]);

    return redirect()->route('vote.form')->with('success', 'Your vote has been cast!');
}

public function submitVoteccc(Request $request)
{
    $validated = $request->validate([
        'contestants' => 'required|array',
        'contestants.*' => 'exists:contestants,id',
    ]);

    // Check if the user has already voted by IP/MAC address
    $userInfo = VoteUserInfo::where('ip_address', $request->ip())
        ->orWhere('mac_address', $request->mac_address)
        ->first();

    if ($userInfo) {
        return response()->json(['success' => false, 'message' => 'You have already voted'], 400);
    }

    // Store user info in voters_user_info table
    $userInfo = new VoteUserInfo;
    $userInfo->ip_address = $request->ip();
    $userInfo->mac_address = $request->mac_address;
    $userInfo->user_Agent = $request->userAgent();
    $userInfo->user_id = 1;
    $userInfo->save();

    // Store votes in the votes table
    foreach ($request->contestants as $contestantId) {
        Vote::create([
            'contestant_id' => $contestantId,
            'user_info_id' => $userInfo->id,
            'category_id' => 0, // Assuming you have the category ID
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Your vote has been submitted!'], 200);
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
        // Return a JSON response with a redirect URL
        return response()->json([
            'success' => false,
            'redirect' => route('sponsors'),
            'message' => 'You have already voted!'
        ], 400);
    }

    // Store user info in voters_user_info table
    $userInfo = new VoteUserInfo;
    $userInfo->ip_address = $request->ip();
    $userInfo->mac_address = $request->ip(); // Assuming you store IP in place of MAC
    $userInfo->user_Agent = $request->userAgent();
    $userInfo->user_id = 1;
    $userInfo->save();

    // Store votes in the votes table
    foreach ($request->contestants as $contestantId) {
        Vote::create([
            'contestant_id' => $contestantId,
            'user_info_id' => $userInfo->id,
            'category_id' => 0,
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Your vote has been submitted!'], 200);
}




}
