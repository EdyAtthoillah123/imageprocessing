<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class imagecontroller extends Controller
{
    public function index(){ 
        return view('image');
    }

    public function store(Request $request){
        if($request->hasFile('profile_image')){
            $filenamewithextension = $request->file('profile_image')->getClientOriginalName();

            $filename= pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension= $request->file('profile_image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;

            $request->file('profile_image')->storeAs('public/profile_images', $filenametostore);
            $request->file('profile_image')->storeAs('public/profile_images/thumbnail', $filenametostore);

            $thumbnailpath= public_path('storage/profile_images/thumbnail/'.$filenametostore);
            $img= Image::make($thumbnailpath)->resize(400,150, function($constraint){
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);

            return redirect('/')->with('success', "Image Uploaded Success");
        }

    }
}
