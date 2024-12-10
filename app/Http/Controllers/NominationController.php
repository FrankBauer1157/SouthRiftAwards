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
        // Fetch categories with their nominations
        $categories = Category::with('nominations')->get();

        // Get distinct 'wkfld' values for each category
        $categoriesWithNominations = Category::with(['nominations' => function($query) {
            $query->select('wkfld', 'category_id')
                  ->distinct()
                  ->whereNotNull('wkfld') // Exclude NULL values
                  ->where('wkfld', '!=', ''); // Exclude empty strings
        }])->get();


        return view('nomination.contestants', compact('categoriesWithNominations','categories'));
    }






    public function getAvailableCategories(Request $request)
    {
        $nominatedCategoryIds = Nomination::where('ip_address', $request->ip())
            ->pluck('category_id'); // Fetch categories already nominated by this IP

        $categories = Category::whereNotIn('id', $nominatedCategoryIds)->get();

        return response()->json($categories);
    }


public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'reason' => 'required|string|max:1000',
    ]);

    if ($request->filled('phone')) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid submission Bot detected!,'
        ], 400);
    }

    // Prevent spamming: Check if the user has already nominated in this category from the same IP
    $exists = Nomination::where('category_id', $request->category_id)
        ->where('ip_address', $request->ip())
        ->exists();

    if ($exists) {
        return response()->json([
            'success' => false,
            'message' => 'You have already nominated in this category. Code:0'
        ], 200);
    }

    if (session()->has("nominated_category_{$request->category_id}")) {
        return response()->json([
            'success' => false,
            'message' => 'You have already nominated in this category. Code:1'
        ], 200);
    }

    if (request()->cookie("nominated_category_{$request->category_id}")) {
        return response()->json([
            'success' => false,
            'message' => 'You have already nominated in this category. Code:2'
        ], 200);
    }

    // Use the user's IP and geolocation (for now using a hardcoded value)
    $ip = $request->ip();
    $location = 'Bomet'; // Replace this with real geolocation logic if needed

    Nomination::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'reason' => $request->reason,
        'ip_address' => $ip,
        'location' => $location,
    ]);

    $categ_name = Category::find($request->category_id)->name;


    $message = 'Thank you for nominating '. $request->name .' as the '. $categ_name .' in South-Rift Matatu Awards -2024.';
     session()->put("nominated_category_{$request->category_id}", true);

    //  return response()->json([
    //     'success' => true,
    //     'message' => $message,
    // ], 200);

    return response()->json(['success' => true, 'message' => $message,])
    ->cookie("nominated_category_{$request->category_id}", true, 60); // 60 minutes expiration


}



}
