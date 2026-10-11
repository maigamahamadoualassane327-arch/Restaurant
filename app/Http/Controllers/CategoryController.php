<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //
    public function saveCategory(Request $request){
        $category = new Category();
        $category->category_name = $request->input('categoryName');

        $category->save();
        return back()->with("status", "votre categorie a ete creer avec succes");
    }
   public function deletecategory($id){

    $category = Category::find($id);
    $category->delete();

    return redirect()->back()->with('status', 'Catégorie supprimée avec succès !');
}
 public function editcategory($id){

    $category = Category::find($id);
     return view("admin.editcategory")->with("category", $category); 
 }
 public function updatecategory(Request $request, $id){
     $category = Category::find($id);
      $category->category_name = $request->input('categoryName');

      $category->update();
      return redirect('admin/category')->with("status", "votre categorie a ete modifier avec succes");
 }
}
