<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomePageController extends Controller
{
    public function index()
    {

        $cheapestProducts = Product::orderBy('price', 'asc')->limit(5)->get();
        $newestProducts = Product::orderBy('created_at', 'desc')->limit(5)->get();


        return view('Pages.Major.index', compact( 'newestProducts','cheapestProducts'));

    }
}
