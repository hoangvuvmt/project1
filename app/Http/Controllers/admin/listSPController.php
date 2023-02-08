<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class listSPController extends Controller
{
    //
    function list (){
        return view ('admin/product/list');
    }
    function addsp(){
        return view('admin/product/addsp');   
    }
}
