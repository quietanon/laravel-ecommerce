<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function orders() {
        $orders = DB::table('place_orders')
            ->join('users', 'users.id', '=', 'place_orders.user_id')
            ->select('place_orders.id', 'place_orders.shipping', 'users.name', 'users.mobile', 'users.address', 'users.city', 'users.state', 'users.pincode')
            ->where('accepted', 'false')
            ->get();
        return view('admin.orders', ['orders' => $orders]);
    }
}
