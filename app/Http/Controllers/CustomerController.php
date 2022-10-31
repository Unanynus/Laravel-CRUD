<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getData($id = null)
    {
        // return $id?Customer::where('id',$id)->first():Customer::all();
        $emp =

        Customer::with('Product')->get();
        // return Customer::find($id);
        return response()->json($emp);
    }

    public function joinTable(){              
        //inner join between the customers and products table
         return DB::table('customers')
        ->join('products','products.branch.id','=','products.branch_id')
        ->join('customers','customers.branch.id','=','customers.branch_id')
        ->select('products.*','products.productname','customers.age')
        ->get();
    
        
        //   return DB::table('customers')
        //   ->join('products','branch.id','=','products.branch_id')
        //   ->where('products.name',"Moto edge 30 ultra")
        //   ->get();

    }

    public function getCust($id=null){
        //function which will create one to one relationship
        $level = DB::table('customers')
           ->join('products','products.branch_id','=','customers.branch_id')
           ->select('customers.id' , 'customers.name','products.productname','products.manufacturingdate')
        //    ->select('customers.*')
           ->where('customers.id',$id)->get();

           return $level;   
    }

    public function leftJoin(){
        $level1 = DB::table('products')
        ->leftJoin('customers','customers.branch_id','=','products.branch_id')
        ->get();

        return $level1;
    }

    public function add(REQUEST $request){
        $customer= new Customer;
        $customer->branch_id=$request->branch_id;
        $customer->name=$request->name;
        $customer->lastname=$request->lastname;
        $customer->age=$request->age;
        $customer->product=$request->product;
        $customer->description=$request->description;
        $result=$customer->save();

        if($result){
            return ["Result"=>"The data has been posted"];
        }else{
            return ["Result"=>"Operation failed"];
        }
        //  echo "it's working";
    }

    public function oneToOne($id){
        return Customer::where('id',$id)->with('Product')->first();
    }

    public function addData(){
        return view('addData');
    }

    public function postData(REQUEST $request){
        DB::table('customers')->insert([
             'branch_id'=>$request->branch_id,
             'name'=>$request->name,
             'lastname'=>$request->lastname,
             'age'=>$request->age,
             'product'=>$request->product,
             'description'=>$request->description,
            
        ]);

        return view('dataEntered');

        
    }

    public function edit($id){  
        $user = DB::table('Customers')->find($id);
        // echo $id;
        // print_r($user->$id);
        // $userData = json_decode(json_encode($user),true);
        // print_r($userData);
        return view('editform',['user'=>$user]);
    }

    public function dataInserted(){
        return view('dataEntered');
    }

    public function httpclient(){
       $user =  DB::table('Customers')->get();
       return view('httpclient',compact('user',$user));
    }

    public function update(REQUEST $request ,$id){
        // DB::table('customers')->where('id',$id)->update([
        //     'branch_id'=>$request->branch_id,
        //     'name'=>$request->name,
        //     'lastname'=>$request->lastname,
        //     'age'=>$request->age,
        //     'product'=>$request->product,
        //     'description'=>$request->description,
        // ]);
        $customer = Customer::all();
        // echo $customer;
        $customers = Customer::where('id',$id)->update([
            'branch_id'=>$request->branch_id,
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'age'=>$request->age,
            'product'=>$request->product,
            'description'=>$request->description,
        ]);

        info($customers);

        return view('customerList',compact('customer'));
    }

    public function fetchAll(){
        //  $customer = DB::table('customers')->where('id',$id)->get();
        //  $customerData = $customer->get();

        $customer = Customer::all();
        echo $customer;
        return view('customerList',compact('customer'));
        // return view('customerList')->with('customer',$customer);

        
        

    }
}



















