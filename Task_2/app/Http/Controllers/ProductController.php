<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show()
    {


        $data=Product::all();
        return view('list',['Product'=>$data ]);
    }
}
