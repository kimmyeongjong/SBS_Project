<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BoardController extends Controller
{
    public function products(Request $request)
    {
        if($request->has('name')){
            $products =
            DB::table('products')
            ->get();
            return $products;
        }else{
            $products =
            DB::table('products')
            ->get();
            return $products;
        }
    }
    public function roommate(Request $request)
    {
        $roommate =
            DB::table('university_boards')
            ->where('subject','search_roommate')
            ->get();
        return $roommate;
    }
    public function studyGroup(Request $request)
    {
        $studyGroup =
            DB::table('university_boards')
            ->where('subject','study_group')
            ->get();
        return $studyGroup;
    }
    public function passRoom(Request $request)
    {
        $passRoom =
            DB::table('university_boards')
            ->where('subject','pass_room')
            ->get();
        return $passRoom;
    }

    public function allBoards(Request $request)
    {
        if($request->has('name')){

        }else{
            $products =
                DB::table('products')
                ->get();
            $roommate =
                DB::table('university_boards')
                ->where('subject','search_roommate')
                ->get();
            $studyGroup =
                DB::table('university_boards')
                ->where('subject','study_group')
                ->get();
            $passRoom =
                DB::table('university_boards')
                ->where('subject','pass_room')
                ->get();

            $allBoards = array(
                'products' => $products,
                'roommates' => $roommate,
                'studyGroups' => $studyGroup,
                'passRooms' => $passRoom,
            );
        }//else end
        return $allBoards;
    }
}
