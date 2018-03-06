<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Brand;

class HomeController extends Controller
{
	//Home Page
    public function index(){
       $data['brands'] = Brand::all();       
       return view('home.index')->with($data);
    }
}
