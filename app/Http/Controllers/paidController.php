<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class paidController extends Controller
{
    public function index(){
        return view('admin.paid.index');
    }

    public function ClearCart(){
        $product = DB::table('cart_lists')-> delete();

        return redirect('/paid');
    }
}
