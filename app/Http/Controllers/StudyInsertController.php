<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyInsertController extends Controller
{
    public function insertForm() {
        return view('study_creat');
    }
    
    public function insert(Request $request) {
        $name = $request->input('stud_name');
        DB::insert('INSERT INTO student (name) value(?)',[$name]);
        echo "Insert data successfull";
        echo '<a href="/insert">Back To</a>';
    }
}