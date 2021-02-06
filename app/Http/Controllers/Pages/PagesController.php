<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'programming', 'seo']
        );
        return view('pages.services')->with($data);
    }
 
}
