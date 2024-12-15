<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;


class AdminController extends Controller
{
    public function view_category(){

        return view('admin.category');
        
    }

    public function add_category(Request $request)
    {
        $category = new category;   

        $category->category_name = $request->category; 

        $category->save();

        toastr()->timeout(5000)->closeButton()->addSuccess('Category Added Successfully');
        
        return redirect()->back();

    }
}
