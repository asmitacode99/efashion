<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use PDF;
use Notification;
use App\Notifications\SendEmailNotification;


class SellerController extends Controller
{
    public function view_category()
    {
   
       if(Auth::id())
       {
         $data=category::all();
         return view('seller.category',compact('data'));
       }
       else
       {
         return redirect('login');
       }
      
    }
   
    public function add_category(Request $request)
    {
      $data=new category;
   
      $data->category_name=$request->category;
      $data->save();
   
      return redirect()->back()->with('message','Category Added Successfully');
    }
   
    public function delete_category($id)
    {
       $data=category::find($id);
       $data->delete();
       return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
   
    public function view_product()
    {
       $category=category::all();
      return view('seller.product',compact('category'));
    }
   
    public function add_product(Request $request)
    {
      $product=new product;
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      $product->quantity=$request->quantity;
      $product->discount_price=$request->dis_price;
      $product->category=$request->category;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product',$imagename);
      $product->image=$imagename;
   
      $product->save();
   
      return redirect()->back()->with('message','Product Added Successfully');  
    }
   
    public function show_product()
    {
     $product=product::all();
     return view('seller.show_product',compact('product'));
    }
   
    public function delete_product($id)
    {
     $product=product::find($id);
     $product->delete();
     return redirect()->back()->with('message','Product Deleted Successfully');
    
    }
   
    public function update_product($id)
    {
     $product=product::find($id);
     $category=category::all();
     return view('seller.update_product',compact('product','category'));
    }
   
    public function update_product_confirm(Request $request,$id)
    {
     $product=product::find($id);
   
     $product->title=$request->title;
     $product->description=$request->description;
     $product->price=$request->price;
     $product->discount_price=$request->dis_price;
     $product->category=$request->category;
     $product->quantity=$request->quantity;
   
     $image=$request->image;
     if($image)
     {
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('product',$imagename);
     
       $product->image=$imagename;
     }
    
     $product->save();
     return redirect()->back()->with('message','Product Updated Successfully');
   
    }
   
    public function order()
    {
       $order=order::all();
   
       return view('seller.order',compact('order'));
    }
   
    public function delivered($id)
    {
      $order=order::find($id);
   
      $order->delivery_status="delivered";
   
      $order->payment_status="Paid";
   
      $order->save();
   
      return redirect()->back();
    }
   
    public function print_pdf($id)
    {
      $order=order::find($id);
      
      $pdf=PDF::loadView('seller.pdf',compact('order'));
   
      return $pdf->download('order_details.pdf');
    }
   
    public function send_email($id)
    {
       $order=order::find($id);
       return view('seller.email_info',compact('order'));
    }
   
    public function send_user_email(Request $request,$id)
    {
      $order=order::find($id);
   
      $details = [
   
           'greeting'=> $request->greeting,
           'firstline'=> $request->firstline,
           'body'=> $request->body,
           'button'=> $request->button,
           'url'=> $request->url,
           'lastline'=> $request->lastline,
           
      ];
   
      Notification::send($order,new SendEmailNotification($details));
   
      return redirect()->back();
   
    }
   
    public function searchdata(Request $request)
    {
      $searchText=$request->search;
   
      $order=order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->get();
   
      return view('seller.order',compact('order'));
    }
    public function transaction($id)
    {
     $order= order::all($id);
   
     return view('admin.transaction',compact('order'));
    
   }

   public function view_vendor()
   {
       return view('admin.vendor');
   }
   public function add_vendor(Request $request)
   {
       $vendor=new vendor;
       $vendor->name=$request->name;

       $vendor->password=$request->password;

       $vendor->address=$request->address;

       $vendor->mobile=$request->mobile;

       $vendor->email=$request->email;


       $vendor->save();
       return redirect()->back()->with('message','Data Added Successfully');
   }

   public function show_vendor()
   {
       $vendor=vendor::all();
       return view('admin.show_vendor',compact('vendor'));
   }
   public function delete_vendor($id)
   {
       $vendor=vendor::find($id);
       $vendor->delete();
       return redirect()->back()->with('message','Data Deleted Successfully');
   }
   public function update_vendor($id)
   {
       $vendor=vendor::find($id);
       return view('admin.update_vendor');
   }
   public function update_vendor_confirm(Request $request,$id)
   {
       if(Auth::id())
       {
           $vendor=new vendor;
           $vendor->name=$request->name;

           $vendor->password=$request->password;

           $vendor->address=$request->address;

           $vendor->mobile=$request->mobile;

           $vendor->email=$request->email;

         
   
           $vendor->save();
   
           return redirect()->back()->with('message','Data Updated Successfully');
       }

       else{
           return redirect('login');
       }
      
   }



  }
   

