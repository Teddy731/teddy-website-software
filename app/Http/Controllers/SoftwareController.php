<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class SoftwareController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function about(){
        return view('about');
    }
    public function contacts(){
        return view('contacts');
    }
    public function blog(){
        return view('blog');
    }
    public function technology(){
        return view('technology');
    }
    public function careers(){
        return view('careers');
    }
    public function store(){
       $feedback=new Feedback();

        $feedback->FirstName=request('FirstName');
        $feedback->LastName=request('LastName');
        $feedback->Email=request('Email');
        $feedback->Comment=request('Comment');

        $feedback->save();
        return redirect('/');
    }
}
