<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    public function index() {
        $current = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->select('products.name', 'products.finalPrize', 'products.images', 'products.availability', 'carts.quantity', 'carts.id', 'carts.product_id')
            ->where('user_id', auth()->user()->id)
            ->where('active', 'true')
            ->get();

        return view('pages.cart', ['carts' => $current]);
    }

    public function addToCart($id) {
        $checkExisting = DB::table('carts')
            ->where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->where('active', 'true')
            ->first();

        if (!$checkExisting) {
            DB::table('carts')->insert([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $_GET['quantity'],
                'active' => 'true',
                'created_at' =>  date('Y-m-d H:i:s'),
            ]);
        } else {
            DB::table('carts')
                ->where('id', $checkExisting -> id)
                ->update(['quantity' => $_GET['quantity'],
                    'active' => 'true'
            ]);
        }
        return redirect()->back()->with([
            'alert' => 'Your cart has been updated!'
        ]);
    }
    public function removeFromCart($id) {
        DB::table('carts')
            ->where('id', $id)
            ->update([
                'active' => 'false'
        ]);
        return redirect()->back()->with([
            'alert' => 'Your cart has been updated!'
        ]);
    }

    public function updateCart($id, $quantity) {
        DB::table('carts')
            ->where('id', $id)
            ->update(['quantity' => $quantity,
                'active' => 'true'
        ]);
        return redirect()->back()->with([
            'alert' => 'Your cart has been updated!'
        ]);
    }
}
