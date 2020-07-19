<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class questionModel {
    public static function get_all(){
        $questions = DB::table('questions')->get();
        return $questions;
    }

}


?>