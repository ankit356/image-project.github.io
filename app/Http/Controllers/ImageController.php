<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('welcome',compact('images'));
    }
    public function show($id){
        $image = Image::find($id);
        if(is_null($image)){
            return redirect('/');
        }
        else{
            $url = url('/view')."/".$id;
            $data = compact('image','url');
            return view('/view')->with($data);
        }
    }
}
