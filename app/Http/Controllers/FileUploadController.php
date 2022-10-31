<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileUploadController extends Controller
{
      public function createForm(){
        return view('file-upload');
      }

      public function fileUpload(REQUEST $request){
           $request->validate([
             'file'=> 'required|mimes:csv,txt,jpeg,png,pdf|max:4096'
           ]);
           $fileModel = new File;
           if($request->file()) {
               $fileName = time().'_mobcast.'.$request->file->getClientOriginalName();
               $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
               $fileModel->name = time().'_'.$request->file->getClientOriginalName();
               $fileModel->filrepath = '/storage/' . $filePath;
               $fileModel->save();
               return back()
               ->with('success','File has been uploaded.')
               ->with('file', $fileName);
           }
      }

      public function  __invoke(){
          
        $docs = File::all();
        
        return view('showimage',compact('docs'));
      }
}
