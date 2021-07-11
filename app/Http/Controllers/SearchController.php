<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function productSearch(Request $request){
        if ($request->filled('search') ) {
            $search = $request->search;
            $products = Product::where('name', 'like' ,'%' .$search. '%')->paginate(10);
    
            return view('pages.products.index', [
                'products' => $products
            ]);
        }else{
            $products = Product::orderBy('created_at', 'desc')->paginate(10);
    
            return view('pages.products.index',[
                'products' => $products
            ]);
        }
    }
}