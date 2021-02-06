<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getProduct($id) {
        $product = DB::table('products')->where('id', $id)->first();
        return view('pages.product', ['product' => $product]);
    }

    public function getProducts() {
        $products = DB::table('products')->paginate(9);
        $count = DB::table('products')->count();
        $pages = $count % 9 === 0 ? $count / 9 : ($count / 9) + 1;
        $gebrr
        return view('pages.shop', ['products' => $products, 'count' => $count, 'page' => $pages]);
    }
}
