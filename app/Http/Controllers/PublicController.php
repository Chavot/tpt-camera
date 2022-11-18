<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index(Request $request){
        $query = Product::query();
        $search = $request->query('search');
        if ($search) {
            $query = $query->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%")
                    ->orWhere('brand', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%");
            });
        }
        $products = Product::latest()->paginate(9);
        return view('index', compact('products'));
    }

    public function brand(Request $request, $brand){
        $query = Product::query();
        $search = $request->query('search');
        if ($search) {
            $query = $query->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%")
                    ->orWhere('brand', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%");
            });
        }
        $products = $query->where('brand', $brand)->latest()->paginate(9);
        return view('index', compact('products'));
    }

    public function show(Product $product){
        return view('show', compact('product'));
    }
    public function cart(){
        $cart = Auth::user()->reservations()->where('status','cart')->first();
        $products = [];
        if($cart) {
            $products = $cart->products;
        }
        return view('cart', compact('products'));
    }

    public function qrscan(){

        return view('qrscan');
    }
}
