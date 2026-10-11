<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
class adminController extends Controller
{

    //
    public function home(){
        return view("admin.home");   
    }

    public function addcategory(){
        return view("admin.addcategory");   
    }
    public function category(){
        $categories = Category::get();
        return view("admin.category")->with("categories", $categories);   
    }
    public function addsliders(){
        return view("admin.addsliders");   
    }
    public function sliders(){
         $sliders = Slider::get();
        return view("admin.slider")->with("sliders", $sliders);  
    }
    public function product(){
        return view("admin.product");   
    }
    public function addproduct(){
        return view("admin.addproduct");   
    }
    public function orders(){
        return view("admin.orders");   
    }
}

