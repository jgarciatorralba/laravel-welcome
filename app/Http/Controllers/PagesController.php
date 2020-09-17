<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function project(){
        return view('pages.project');
    }

    public function contact(){
        return view('pages.contact');
    }
}
