<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('nominations')->get();
        $totalNominations = $categories->sum('nominations_count');
        return view('dashboard', compact('categories', 'totalNominations'));
    }
}
