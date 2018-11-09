<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = "Welcome to blog!";
        return view("pages.index")->with("title", $title);
    }
    public function about(){
        $title = "Welcome to blog!\n about us";
        return view("pages.about")->with("title", $title);
    }
    public function services(){
        $data = array('title'=> 'services', 
                    'services' => ['webesign', 'seo', 'css', 'html']);
        return view("pages.services")->with($data);
    }

}
