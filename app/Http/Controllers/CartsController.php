<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    public function index() {

    }

    public function addToCart($id) {
        $checkExisting = DB::table('carts')
            ->where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->where('active', true)
            ->first();

        if (!$checkExisting) {
            DB::table('carts')->insert([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $_GET['quantity'],
                'created_at' =>  date('Y-m-d H:i:s'),
            ]);
        } else {
            DB::table('carts')
                ->where('id', $checkExisting -> id)
                ->update(['quantity' => $_GET['quantity'],
            ]);
        }
        return redirect()->back();
    }
}
