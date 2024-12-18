<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index ()
    {
        return view('admin.index');

    }

    public function home ()
    {
        $product= Product::all(); #nabo- will give product datase
        if (Auth::id()) #if logged in user exits
        {
            $user=Auth::user();
            $userid=$user->id;  
            $count = Cart::where('user_id',$userid)-> count();
        }
        else{
            $count=' '; #otherwise it will provide null
        }
      
        return view('home.index',compact('product','count'));
        
    }
        
   
public function login_home()
{
    $product= Product::all(); 
    if (Auth::id()) #if logged in user exits
        {
            $user=Auth::user();
            $userid=$user->id;  
            $count = Cart::where('user_id',$userid)-> count();
        }
        else{
            $count=' '; #otherwise it will provide null
        }
      
    return view('home.index',compact('product','count'));
    
}
public function product_details($id)
{
    $data= Product::find($id);
    if (Auth::id()) #if logged in user exits
    {
        $user=Auth::user();
        $userid=$user->id;  
        $count = Cart::where('user_id',$userid)-> count();
    }
    else{
        $count=' '; #otherwise it will provide null
    }
  

    return view('home.product_details',compact('data','count'));
}
 public function add_cart($id)
 {
    $product_id= $id;
    $user=Auth::user();
    $user_id=$user->id;
    #logged in user er shob data variable e store kora hocche : Nabo
    $data= new Cart;
    $data->user_id= $user_id; #user_id coming from the database: Nabo
    $data->product_id= $product_id;

    $data->save();
    toastr()->timeout(5000)->closeButton()->addSuccess('Product Added to the Cart Successfully!');
    return redirect()->back();
 }


 public function delete_cart($id)
 {
     $data = Cart::find($id);

     $data->delete();

     flash()->success('The product has been Deleted successfully');

     return redirect()->back();
 }

 #NOT SURE HOW TO CONNNECT THIS WITH THE REMOVE BUTTON FOR THE ADDED PRODUCTS WITHIN THE CART

 public function mycart()
 {
    if (Auth::id())
    {
        $user=Auth::user();
        $userid=$user->id;
        $count=Cart::where('user_id',$userid)->count();
        $cart=Cart::where('user_id',$userid)->get(); #gets data for the specific user within the cart table given that he has added those items : Nabo
    }
    return view('home.mycart',compact('count','cart'));
 }
}
