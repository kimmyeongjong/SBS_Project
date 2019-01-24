<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function goMain()
    {
        $top_category = DB::table('categories')->whereNull('top_category')->get();

        $ad = DB::table('advertisements')->where('ad_classification','main')->get();
        return view('welcome', ['category'=>$top_category, 'ad'=>$ad]);
    }
    public function temp(Request $request)
    {
        return $request;
    }
}
