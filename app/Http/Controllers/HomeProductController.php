<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeProductController extends Controller
{
    public function index()
    {
        // $allProducts = Product::all();
        $allProducts = Product::paginate(5);

        return view('Pages.Major.all-products', compact( 'allProducts'));

    }
}
