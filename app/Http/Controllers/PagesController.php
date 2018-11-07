<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Alumnis';
        /* return view('pages.index', compact('title')); */
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Forum';
        return view('pages.forum')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Alumnis Services!',
            'services' => ['Web Design', 'Programming', 'Data Base']
        );
        return view('pages.oportunities')->with($data);
    }
}
