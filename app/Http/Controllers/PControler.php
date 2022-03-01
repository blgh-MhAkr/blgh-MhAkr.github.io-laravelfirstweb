<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PControler extends Controller
{
    //
    public function index(){
        return view('about', [
            'title' => 'about',
            'about' => post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            'title' => 'satu post',
            'post' => post::find($slug)
        ]);
    }
}
