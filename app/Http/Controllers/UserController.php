<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index()
{
    $userPosts = auth()->user()->posts;

    return view('post', compact('userPosts'));
}


    public function janda() {

        return view('beranda2');
    }

    public function category() {

        return view('category');
    }

    public function infoCard() {

        return view('infoCard');    
    }
}

