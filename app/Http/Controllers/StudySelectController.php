<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudySelectController extends Controller
{
    public function select(Request $request) {
       
        $user = DB::select('SELECT * FROM student');
        return view('studyView',['user'=>$user]);
       
    }
}