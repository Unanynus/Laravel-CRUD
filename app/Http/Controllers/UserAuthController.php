<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function userLogin(REQUEST $request){
        return $request->input();
    }
}
