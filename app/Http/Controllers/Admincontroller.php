<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\sale;

class Admincontroller extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data=new product;
        
        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;


        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');


    }

    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Delete');
    }

    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updateproduct(Request $request ,$id)
    {
        $data=product::find($id);

        $image=$request->file;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;
        }

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;


        $data->save();

        return redirect()->back()->with('message','Product Update Successfully');

    }


    public function showorder()
    {
        $order=order::all();

        return view('admin.showorder',compact('order')); 
    }
    
    public function updatestatus($id)
    {
        $order=order::find($id);

        $order->status='จ่ายเเล้ว';

        $order->save();

        return redirect()->back();
    }

    // //public function Website ()
    //     {
    // //        $sale =sale::select("price","quantity")->get();

    //         $answer =['price','quantity'];

    //         foreach($sale as $key=> $value){
    //             $answer[++$key]="[ '".(int)$value->price."' , '" .(int)$value->quantity. "' ]";
    //         } 
    //         return view ('admin.showproduct',compact('answer'));
    //     }
    }