<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function index()
    {
        $allCategoryies = Category::paginate(5);
        return view('Pages.Major.all-category-grid', compact( 'allCategoryies'));

    }
}
