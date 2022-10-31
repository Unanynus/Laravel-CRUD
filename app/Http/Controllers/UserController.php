<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function fileImport(){
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function fileExport(REQUEST $request){
        return Excel::download(new UsersExport, 'employeedetails.xlsx');
    }

    public function importFile(REQUEST $request){
        Excel::import(new UsersImport, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function showData(){
        $display = User::all();

        return response()->json($display);

    }
}
