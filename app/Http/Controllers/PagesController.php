<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){
        $people = ['Taylor', 'Matt', 'Jeffrey'];
        return view('home', compact('people'));
    }
    public function about(){
        return view('pages.about');
    }
    public function cv(){
        return view('pages.cv');
    }
    public function projects(){
        return view('pages.projects');
    }
    public function school(){
        return view('pages.school');
    }
    public function school2(){
        return view('pages.school2');
    }
    public function school3(){
        return view('pages.school3');
    }
    public function contact(){
        return view('pages.contact');
    }
}
