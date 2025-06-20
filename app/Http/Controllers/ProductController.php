<?php

namespace App\Http\Controllers;

use App\Models\product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){

        $product=product::all();
        return view('backend.crud.productlist',compact('product'));
    }

    public function form(){
        return view ('backend.crud.productcreate');
    }

    public function store(Request $request){
        product::create ([

            "name"=>$request->name,
            "price"=>$request->price,
            "quantity"=>$request->quantity,
            "description"=>$request->desc,
           

        ]);
        toastr()->title('Product creation')->options(['progressBar' => false])
        ->success('Product has been created ');
        return redirect()->route('product.list');
    }

    public function delete($id){
        product::find($id)->delete();
        return redirect()->back();
    }
}
