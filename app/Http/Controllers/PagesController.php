<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $titles='Welcome To AladinLabs Blogger';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $titles);
    }

    public function about(){
        $titles='About us';
        return view('pages.about')->with('title', $titles);
    }

    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming' , 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
