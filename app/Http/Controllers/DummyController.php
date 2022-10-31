<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
     public function getData(){
        $product = ["name"=>"Premsai","age"=>21,"email"=>"premsai@mobcast.in","address"=>"Mumbai"];
        return $product;
     }
}
