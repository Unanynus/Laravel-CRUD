<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class DeviceController extends Controller
{
    function lists($device_id=null){

        return $device_id?Device::where('device_id',$device_id)->first():Device::all();
    }

    // function listQuery($device_id){
    
        
    //     // $devices = Device::all();
        
    //     // $device = $devices->find($id);
    //     // // echo $id;
    //     // echo $device;

    //     $data = Device::where('device_id',$device_id)->first();
    //     if($data){
    //         return $data;

    //     }else{
    //         return "No data found in database...!";
    //     }

    // }

    public function insertform(){
     
        return view('devices');

    }

    public function requestdata(REQUEST $request){

        $validated= $request->validate([
            'name'=> 'required',
            'department'=>'required',
            'email'=>'required',
            'salary'=>'required'
        ]
        );

        // DB::table('devices')->insert([
        //     // $name = $request->input('name');
        //     // $department = $request->input('department');
        //     // $email = $request->input('email');
        //     // $salary = $request->input('salary');

        //     'name'=>$request->name ,
        //     'department'=>$request->department,
        //     'email'=>$request->email ,
        //     'salary'=>$request->salary ,
        // ]);

           $devmember = new Device();
           $devmember ->name=$request->name;
           $devmember ->department=$request->department;
           $devmember ->email=$request->email;
           $devmember ->salary=$request->salary;
           $devmember->save();
           return redirect('info');
        
    }
}
