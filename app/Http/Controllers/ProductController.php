<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()    {
          $products= product::all(); //trae todos los registros
        // $products= Product::orderBy('id', 'asc')-> paginate();//los trae por paginas de 15 en 15     
        return view('products.index', compact('products'));
       
    }

    
    public function create()    {
        
    }

    public function show()      {
        
    }
}
