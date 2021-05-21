<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectSampleContoller extends Controller
{
    public function index(){
    	return "This is the index of method index()";
    }

    public function showMessage($message){
    	return $message;
    }

    public function showSomething($message){
    	return $message;
    }
}


