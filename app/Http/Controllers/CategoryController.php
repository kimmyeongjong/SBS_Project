<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\category;
class CategoryController extends Controller
{
    public function allCategory()
    {
        // $category_top = DB::table('categories')->where('classification','top')->get();

        $firstCategory =
            DB::table('categories')
            ->whereNull('top_category')
            ->get();

        $secondCategory =
            DB::table('categories')
            ->where([
                ['top_category','>',10],
                ['top_category','<',100],
            ])
            ->get();
        $thirdCategory =
        DB::table('categories')
        ->where([
            ['top_category','>',100],
            ['top_category','<',1000],
        ])
        ->get();
        $category_array = array(
            'first' => $firstCategory,
            'second' => $secondCategory,
            'third' => $thirdCategory,
        );
        return $category_array;
        return DB::table('categories AS a')
        ->join('categories AS b','a.category_num','=','b.top_category')
        ->join('categories AS c','b.category_num','=','c.top_category')
        ->select('a.*','b.*','c.*')
        ->get();

        return $flights;
    }
}
