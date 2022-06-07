<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('category.register');
  }
    function store(Request $request)
    
    {
      $category =new category();
      $category->id = $request->id;
      $category->name = $request->name;
     $is_saved = $category->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $category = category::all();
     return view('category.list', compact('category'));
    } 
    public function edit($id)
 {
 $category = category::find($id);
 return view('category.edit', compact('category'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $category= category::find($request->id);
    $category->id = $request->id;
    $category->name = $request->name;
    $category->save();
    return redirect('category/list');
    }
    public function delete($id)
 {
  category::where('id', $id)->delete();
 return redirect('category/list');
   
}

public function search($id)
    {
     $category = category::where('id',$id)->first();
     return view('category.search', compact('category'));
    } 
  }
