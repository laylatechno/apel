<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeMenuController extends Controller
{
    public function menu($slug){
        $menu = Menu::where('slug', $slug)->first();
        // dd($menu);  
        return view('front.menu.index', compact('menu'));
    }
}
