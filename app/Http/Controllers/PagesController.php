<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return redirect('/articles');
    }

    public function home(){
    	return redirect('/articles');
    }
}
