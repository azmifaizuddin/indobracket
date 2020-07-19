<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class questionModel {



    public static function save($data){
        unset($data["_token"]);
        $new_question = DB::table('questions')->insert($data);
        return $new_question;
    }

}


?>
