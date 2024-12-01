<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Assuming categories are stored in this model
use App\Models\Nomination; // Create this model for storing nominations
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Facades\LocationFacade;
use Illuminate\Support\Facades\Http;

use GeoIP;


class NominationController extends Controller
{

    public function index()
    {
        $nominations = Nomination::with('category')->get(); // Fetch nominations with their categories
        return view('nomination.index', compact('nominations'));
    }
    public function adminview()
    {
        // $categories = Category::with('nominations')->get();
        // $nominations = Nomination::with('category')->get();
        $categories = Category::with('nominations')->get();
       // dd($categories);
        return view('nomination.index', compact('categories'));



        // $nominations = Nomination::with('category')->get(); // Fetch nominations with their categories
        // return view('nomination.index', compact('nominations'));
    }
    public function create()
    {
        $categories = Category::all(); // Fetch categories
        return view('nomination.create', compact('categories'));
    }

    public function storex(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'reason' => 'required|string|max:1000',
        ]);

        $ipAddress = $request->ip(); // or '127.0.0.1' for testing locally

        // Fetch location data (if you installed the `stevebauman/location` package)
        $location = Location::get($ipAddress);

        // Save the nomination
        Nomination::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'reason' => $request->reason,
            'ip_address' => $ipAddress,
            'user_agent' => $request->header('User-Agent'),
            'location' => $location ? json_encode([
                'country' => $location->countryName,
                'region' => $location->regionName,
                'city' => $location->cityName,
            ]) : null,
        ]);
     //   dd(nomination::all());

        return redirect()->route('nomination.create')->with('success', 'Nomination submitted successfully!');
    }

    public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'reason' => 'required|string|max:1000',
    ]);


    // Prevent spamming: Check if the user has already nominated in this category from the same IP
    $exists = Nomination::where('category_id', $request->category_id)
        ->where('ip_address', $request->ip())
        ->exists();

    if ($exists) {
        return back()->withErrors(['error' => 'You have already nominated in this category.']);
    }

    $ip = $request->ip(); // Get IP address
    // $response = Http::get("http://ip-api.com/json/{$ip}"); // Fetch geolocation data
    // $location = $response->successful() ?
    //     $response->json('city') . ', ' . $response->json('country') :
    //     'Unknown'; // Handle failure gracefully

        $location = 'Bomet'; //geoip()->getLocation('41.90.4.236');
// $city = $location['city'];
// $country = $location['country'];

//dd($location);

    Nomination::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'reason' => $request->reason,
        'ip_address' => $ip, // Save IP
        'location' => $location, // Save location
    ]);

    return redirect()->route('nomination.create')->with('success', 'Nomination submitted successfully!');
}
}
