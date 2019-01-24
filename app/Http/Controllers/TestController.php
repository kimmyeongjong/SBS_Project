<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {
        $category_bottom = DB::table('categories')->where('top_category',11)->get();
        return $category_bottom;
    }
}
