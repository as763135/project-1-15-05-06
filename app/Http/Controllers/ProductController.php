<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function index(){
        $product=Product::orderBy('created_at','desc')->Paginate(2);
        return view('admin.product.index',compact('product'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function insert (Request $request){
        $product = new Product();
        $product->name =$request->name;
        $product->price =$request->price;
        $product->description =$request->descripion;
        
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'
            .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                public_path().'/backend/upload/',$filename);
            Image::make(public_path().'/backend/upload/'
            .$filename)->resize(250,250)->save(public_path().
            '/backend/upload/resize/'.$filename);
            $product->image=$filename;
        }else{
            $product->image='nopic.png';
        }
        $product->save();
        return redirect('admin/product/index');  
    }

    public function delete($id){
        $product=Product::find($id);
        if($product->imge !='nopic.png'){
            File::delete(public_path().'/backend/uploade/'.$product->image);
            File::delete(public_path().'/backend/uploade/resize/'.$product->image);
        }
        $product->delete();
        return redirect('admin/product/index');
    } 
    public function edit ($id){
        $product=Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $product= Product::find($id);

        $product->name =$request->name;
        $product->price =$request->price;
        $product->description =$request->descripion;

    if($request->hasFile('image')){
        if($product->imge !='nopic.png'){
            File::delete(public_path().'/backend/uploade/'.$product->image);
            File::delete(public_path().'/backend/uploade/resize/'.$product->image);
        }
        $filename = Str::random(10).'.'
        .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
        public_path().'/backend/upload/',$filename);
    Image::make(public_path().'/backend/upload/'
        .$filename)->resize(250,250)->save(public_path().
        '/backend/upload/resize/'.$filename);
        $product->image=$filename;
    }

        $product->save();
        return redirect('admin/product/index');




}

}