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
    public function voted()
    {
        https://github.com/FrankBauer1157/SouthRiftAwards/blob/81689beeb1353efedd9ef087acfe4806cbb40981/resources/views/nomination/sponosors.blade.php
        return view('sponsors');
    }
}
