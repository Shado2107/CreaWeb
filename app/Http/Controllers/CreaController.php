<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreaController extends Controller
{
    public function Portfolio(){
        return view('pages.portfolio');
    } 

    public function Home(){
        return view('welcome');
    }

    public function Contact(){
        return view('pages.contact');
    }
}
