<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function fetchData($id = null)
    {
        return $id?Product::where('id',$id)->first():Product::all();
        // return Product::find($id);
    }
    public function getAllData(){
        return DB::table('products')
        ->join('customers','name','=','customers.name')
        // ->select('products.*')
        ->where('customers.branch_id',103)
        ->get();
    } 

    public function index(){
        return Product::all();
         // return Product::find(3)->getProdDetial;
    }

    public function add(REQUEST $request){
        $product= new Product;
        $product->branch_id=$request->branch_id;
        $product->productname=$request->productname;
        $product->description=$request->description;
        $product->manufacturingdate=$request->manufacturingdate;
        $product->warrantyperiod=$request->warrantyperiod;
        $result=$product->save();

        if($result){
            return ["Result"=>"The data has been posted"];
        }else{
            return ["Result"=>"Operation failed"];
        }
         echo "it's working";
    }

    public function insert(){

    }
}
