<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function shorten( Request $request){
        $request -> validate([
            'url'=> 'required|url'
        ]);


        $existing = Url :: where ('original_url',$request->url)-> first();
        if($existing){
            return redirect('/')->with('shortened',url($existing->short_code));
        }
        $shortCode  = substr(md5(uniqid()),0,6);

        $url = Url :: create ([
            'original_url' => $request->url,
            'short_code' => $shortCode
        ]);
        return redirect('/')->with('shortened',url($shortCode));
    }
    public function redirect ($code ){
        $url = URL::where('short_code',$code )->firstOrFail();
        return redirect($url->original_url);
    }
}
