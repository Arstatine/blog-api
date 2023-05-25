<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // show all categories
    public function index(){
        $category = Categories::all();
        if($category){
            return response()->json($category);
        }

        return response()->json(['message' => 'No data found.']);
    }

    // create new category
    public function store(Request $request){
        $form = $request->validate([
            'category_title' => ['required']
        ]);

        if($form){
            $category = Categories::create($form);
            return response()->json(['message' => 'New category added.', 'category' => $category]);
        }

        return response()->json(['message' => 'Unable to add new category.']);
    }

    // update a category
    public function update(Request $request, $id){
        $form = $request->validate([
            'category_title' => ['required']
        ]);

        if($form){
            $category = Categories::find($id);
            $category->category_title = $request->category_title;
            $category->save();
            return response()->json(['message' => 'Category updated.', 'category' => $category]);
        }

        return response()->json(['message' => 'Unable to update category.']);
    }

    // delete a category
    public function destroy($id){
        $category = Categories::destroy($id);

        if($category){
                return response()->json(['message' => 'Category deleted successfully with the id of '. $id]);
        }

        return response()->json(['message' => 'Unable to delete this category.']);
    }
}
