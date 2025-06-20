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
        toastr()->title('Category creation')->options(['progressBar' => false])
        ->success('Category has been created ');
    
        return redirect()->route('cat.list');
        
    }
    public function delete($id){
        category::find($id)->delete();

        toastr()->warning('Deleted');
        return redirect()->back();
    }
}
