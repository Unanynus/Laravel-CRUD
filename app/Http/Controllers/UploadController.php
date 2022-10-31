<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use Symfony\Contracts\Service\Attribute\Required;

use function GuzzleHttp\Promise\all;

class UploadController extends Controller
{
    public function index(REQUEST $request){
    
        // //Validation
        // $request ->validate([
        //     'file'=>'Required|mimes:png,jpeg,csv,txt,pdf|max:2048'
        // ]);

         // Validation
      // $request->validate([
      //   'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
      // ]); 

      // if($request->file('file')) {
      //    $file = $request->file('file');
      //    $filename = time().'_'.$file->getClientOriginalName();

      //    // File upload location
      //    $location = 'files';


      //    // Upload file
      //    $file->move($location,$filename);

      //    return view('submitFile');
      // }
         
       $filename = time()."-mobcast".$request->file('image')->getClientOriginalExtension();
       echo $request->file('image')->storeAs('uploads',$filename);



    }
}
