<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ProductsController extends Controller
{
    public function index()
    {  
        
        $categories=DB::table('products')->pluck('category');
        

        $products=Product::all();
        return view('index',["products"=>$products ,'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return view('addProduct');
      
    }

      public function destroy($id)
    {
        Product::find($id)->delete();
        $categories=DB::table('products')->pluck('category');
        $products=Product::all();
        return view('index',["products"=>$products,'categories'=>$categories]);
      
    }
    
   public function edit($id)
    {
        $product=Product::find($id);
        return view('editPro',compact('product'));
      
    }

     public function update(Request $request,Product $product)
    {
       
       
        $product=Product::find($product->id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->details=$request->details;
        
        $product->save();
        $products=Product::all();
        $categories=DB::table('products')->pluck('category');
        return view('index',["products"=>$products,'categories'=>$categories]);
        
    }

       function search(Request $request)
    {   

        $products=DB::table('products')->where('name','like',"%{$request->name}%")->get();
        $categories=DB::table('products')->pluck('category');
        return view('index',['products' =>$products,'categories'=>$categories]);
    }

        function filter(Request $request)
    {   
        $categories=DB::table('products')->pluck('category');
        $categories=mysqli_query($conn, $categories);


        $products=DB::table('products')->where('category',"{$request->category}")->get();
        return view('index',['products' =>$products,'categories'=>$categories]);
    }










}
