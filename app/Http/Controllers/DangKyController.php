<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productRequest;
use App\product;

class DangKyController extends Controller
{
    public function them(productRequest $request){
     // $product=new product();
     // $product->name=$request->Mônhoc;
     // $product->price=$request->Giatiên;
     // $product->teacher=$request->Giangviên;
     // $product->save();
     // return redirect('form/dang-ky');
    	echo"<pre>";
    	echo "Tên hình:".$request->file('image')->getClientOriginalName()."<br/>";
    	echo "Kích thước:".$request->file('image')->getSize();
    	echo"</pre>";
    }
}
