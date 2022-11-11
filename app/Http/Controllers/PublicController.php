<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(10);
        return view('index', compact('products'));
    }
    public function show(Product $product){
        return view('show', compact('product'));
    }
    public function cart(){
        $products = Auth::user()->reservations()->where('status','cart')->first()->products;
        return view('cart', compact('products'));
    }

}
