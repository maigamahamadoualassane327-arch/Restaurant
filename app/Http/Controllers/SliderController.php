<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //

     public function saveslider(Request $request)
    {
        $validated = $request->validate([
            'slidersName' => 'required',
            'image' => 'nullable|image|max:1999',
        ]);

        // getting file name with extension

        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        
        //getting file

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        //getting file extension

        $ext = $request->file('image')->getClientOriginalExtension();
        
        //file name to store

        $fileNameToStore = $fileName."_".time().".".$ext;

        //uploading image in the laravel file

        $path = $request->file('image')->storeAs("public/slider_image", $fileNameToStore);

        $slider = new slider();
        $slider->slidersName = $request->input('slidersName');
        $slider->image = $fileNameToStore;

        $slider->save();

        return back()->with("status", "votre slider a ete créer avec succès");

         }
}
