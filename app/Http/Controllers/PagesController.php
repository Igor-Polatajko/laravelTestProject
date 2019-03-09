<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public static function index(){
    	return view('pages.index');
    }

    public static function about(){
    	return view('pages.about');
    }

    public static function services(){

    	$data = array(
    		'services' => ['Web Development', 'Java SE Development', 'Android Development']);

    	return view('pages.services')->with($data);
    }
}
