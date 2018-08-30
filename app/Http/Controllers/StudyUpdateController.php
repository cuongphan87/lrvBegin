<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyUpdateController extends Controller
{
    public function index(Request $request) {
        $users = DB::select('Select * from student');
        return view('StudyViewEdit',['users'=> $users]);
    }
    
    public function selectId($id) {
        $users = DB::select('Select * from student where id=?',[$id]);
        return view('studyEdit',['users'=> $users]);
    }
    
    public function updateId(Request $request, $id){
        $name = $request->input('stud_name');
        DB::update('UPDATE student set name = ? where id = ?',[$name,$id]);
        echo "Update Successfull </br>";
        echo '<a href="/view_list_data}" >Back to</a>';
    }
}