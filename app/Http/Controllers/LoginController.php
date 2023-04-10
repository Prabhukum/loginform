<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function create(Request $request){

        $name = $request->input('firstname');
        DB::insert('insert into users (name) values (?)', [$name]);

        return 'Submitted Succesfully <a href="/"><br>Back</a>';
    }

}

