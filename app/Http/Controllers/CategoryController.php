<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
       $cat= category::all();
        return view('backend.crud.categorylist',compact('cat'));
    }


    public function form(){
        return view('backend.crud.categorycreate');
    }

    public function store(Request $request){

      
        category::create([

            "name"=>$request->name

        ]);
        return redirect()->route('cat.list');
        
    }
    public function delete($id){
        category::find($id)->delete();
        return redirect()->back();
    }
}
