<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ //$product=Product::find(2);

       $products=Product::all();

       return view('product.list', compact('products'));

    }

    public function create (){

        return view('product.create');

    }

    public function store(Request $request){

        $product= new Product();

        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;

        $product->save();

        return $product;


    }

    public function show($id){

        $product = Product::find($id);

        return view('product.show', compact('product'));

    }



    public function destroy ($id){

       $product = Product::find($id);

       $product->delete();

       return redirect()->route('product.index');

    }



    public function edit($id){//Encuentro el Curso

        $product = Product::find($id);

        return view('product.edit',compact('product'));

      }
      public function update(Request $request,$id){


        $product = Product::find($id);

        $product ->name = $request->name;
        $product ->description = $request->description;
        $product ->price = $request->price;

       
        $product->save();

        return redirect()->route('product.index');



      }

}