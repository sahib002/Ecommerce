<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;


class AdminController extends Controller
{
    public function view_category(){
        $data = category::all();

        return view('admin.category',compact('data'));
        
    }

    public function add_category(Request $request)
    {
        $category = new category;   

        $category->category_name = $request->category; 

        $category->save();

        toastr()->timeout(5000)->closeButton()->addSuccess('Category Added Successfully');
        
        return redirect()->back();

    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        toastr()->timeout(5000)->closeButton()->addSuccess('Category Deleted Successfully');
        
        return redirect()->back();

    }

    public function edit_category($id)
    {
        $data = category::find($id);

        return view('admin.edit_category',compact('data'));
        
    }
    public function update_category(Request $request, $id)
    {
        $data = category::find($id);
        $data-> category_name = $request -> category; 
        $data-> save();
        toastr()->timeout(5000)->closeButton()->addSuccess('Category Updated Successfully');
        
        return redirect('/view_category');
    }
}
