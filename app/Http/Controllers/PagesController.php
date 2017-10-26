<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("pages.index");
    }

    public function getPage($slug = null){
        // $page = Page::where('route', $slug)->where('active', 1);
        // $page = $page->firstOrFail();
        // return view($page->template)->with('page', $page);
       $data = array(
           "title" => "List Devices",
           "devices" => array(
                "Apple iMac",
                "Apple iPhone 8.0",
                "Apple iPad 3.0"
           )
       );
        return view("pages.view")->with($data);
    }
}
