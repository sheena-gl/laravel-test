<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function about(){
    	$data=[];
    	$data['first_name']='Luke';
    	$data['last_name']='Skywalker';
    	return view('pages.about',$data);
    	//return view('pages.about');
    }
}
