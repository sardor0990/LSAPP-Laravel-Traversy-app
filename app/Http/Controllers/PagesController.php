<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel';
        //return view('pages.index', compact('title')); birxil pasidigi bilan compact va with
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title); 
        
    }

    public function services(){
        $data = array(
           'title' => 'Services',
           'description' => 'yoo man :)',
           'services' => ['Web Design', 'Programming', 'SEO', 'Reactjs']
        );
        return view('pages.services')->with($data);
    }
}
