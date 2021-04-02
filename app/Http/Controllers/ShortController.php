<?php

namespace App\Http\Controllers;

use App\short;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortController extends Controller
{
    public function index(){
        return view('short-list');
    }
    public function create(){
        return view('short-create');
    }
    public function store(Request $request){

        $url = short::create([
            'long_url'=>$request->long_url,
            'short_url'=> Str::random(5),
        ]);
        $with = [
            'long_url' => $url
        ];

        return redirect('/')->with('success','short.local/gt/341'.$url->short_url);

    }
}
