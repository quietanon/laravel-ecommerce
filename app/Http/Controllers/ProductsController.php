<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getProduct($id) {
        $product = DB::table('products')->where('id', $id)->first();
        return view('pages.product', ['product' => $product]);
    }

    public function getProducts($search,$sort) {
        Paginator::useBootstrap();
        if ($search != 0 && $sort != 0) {
            $products = DB::table('products')->where('name', 'like', '%'.$search.'%')->orWhere('category', 'like', '%'.$search.'%')->orWhere('season', 'like', '%'.$search.'%');
            switch ($sort) {
            case 1:
                $products = $products->latest()->paginate(9);
                break;
            case 2:
                $products = $products->orderBy('finalPrize', 'desc')->paginate(9);
                break;
            case 3:
                $products = $products->orderBy('finalPrize', 'asc')->paginate(9);
                break;
            default:
                $products->inRandomOrder()->paginate(9);
            }
        } else if ($search != 0) {
            $products = DB::table('products')->where('name', 'like', '%'.$search.'%')->orWhere('category', 'like', '%'.$search.'%')->orWhere('season', 'like', '%'.$search.'%')->paginate(9);
        } else if ($sort != 0) {
            switch ($sort) {
            case 1:
                $products = DB::table('products')->latest()->paginate(9);
                break;
            case 2:
                $products = DB::table('products')->orderBy('finalPrize', 'desc')->paginate(9);
                break;
            case 3:
                $products = DB::table('products')->orderBy('finalPrize', 'asc')->paginate(9);
                break;
            default:
                $products = DB::table('products')->inRandomOrder()->paginate(9);
            }
        } else {
            $products = DB::table('products')->inRandomOrder()->paginate(9);
        }
        return view('pages.shop', ['products' => $products]);
    }
}
