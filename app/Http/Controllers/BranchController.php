<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function dept($branch_id=null){
        // echo $branch_name;

        return $branch_id?Branch::where('branch_id',$branch_id)->first():Branch::all();
    }

    // public function fetch($branch_id){
        
    //     $data = Branch::where('branch_id',$branch_id)->first();
    //     if($data){
    //         return $data;
    //     }else{
    //         echo 'The data has been not found in the data base';
    //     }
        
    // }
}
