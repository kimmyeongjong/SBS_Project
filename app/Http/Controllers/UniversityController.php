<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UniversityController extends Controller
{
    public function universityNames()
    {
        if (Auth::check()) {
            $universities = DB::table('universities')->select('university_name', 'university_id')->get();
            return $universities;
            // 유저가 속한 대학교 첫번째로 가져오고 나머지 순서대로 출력
        }else{
            $universities =
            DB::table('universities')
            ->select('university_name','university_id')
            ->orderBy('university_name')
            ->get();
            return $universities;
        }
    }
}
