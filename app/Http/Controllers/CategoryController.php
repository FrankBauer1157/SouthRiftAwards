<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Nomination;


class CategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Show the form to create a new category
    public function create()
    {
        return view('categories.create');
    }
    public function getNominations($categoryId)
{
    $nominations = Nomination::select('name', DB::raw('COUNT(*) as count'))
        ->where('category_id', $categoryId)
        ->groupBy('name')
        ->get();

    return response()->json($nominations);
}
    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }
}
