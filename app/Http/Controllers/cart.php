<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cart extends Controller
{
   public function index(){
       $product = DB::table('cart_lists') -> get();
       return view('admin.cart.index', compact('product'));
   }

   public function addCart(Request $request){
    try {
        $request -> validate([
            'Product_id' => 'required|max:4|min:4',
            'Amount' => 'required|max:4'
        ]);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    $prod_id = $request -> Product_id;
    $amount  = $request -> Amount;
    $data=array('prod_id'=>$prod_id ,'amount'=>$amount );
    DB::table('cart_lists')->insert($data);

    return redirect('/mycart');
    }
    public function delete($id){
        $product = DB::table('cart_lists')->where('id',$id) -> delete();

        return redirect('/mycart');
    }
}
