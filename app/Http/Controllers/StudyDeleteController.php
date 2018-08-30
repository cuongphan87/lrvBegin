<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyDeleteController extends Controller
{
    public function deleteId($id) {
        DB::delete('Delete From student Where id=?',[$id]);
        echo "<div>Delete Successfull</div>";
        echo '<a href="/view_list_data">Back To</a>';
    }
}