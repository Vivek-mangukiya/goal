<?php

namespace App\Http\Controllers\Front;

use App\Models\PageContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $home = PageContent::where('key','regexp','home_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('front.home.index',compact('home'));
    }
}
