<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; // Memanggil model produk
use Illuminate\View\View;


class ProductController extends Controller
{
    public function index(): View
    {
        // Fetch all products from the database
        $products = Products::latest()->paginate(10); // Assuming Product model exists

        // Pass the products to the view
        return view('products.index', compact('products'));
    }
    public function  create(): View
    {
        return view('products.create');
    }
}