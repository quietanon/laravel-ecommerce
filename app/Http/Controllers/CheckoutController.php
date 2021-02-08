<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index() {
        if(!auth()->check()) {
            return redirect()->intended('/cart')->with([
                'alert' => 'You have to login first!!'
            ]);
        }
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        return view('pages.checkout', ['user' => $user]);
    }

    public function place() {
        $mobile = $_GET['mobile'];
        $address = $_GET['address'];
        $city = $_GET['city'];
        $state = $_GET['state'];
        $pincode = $_GET['pincode'];

        $user = DB::table('users')
            ->where('id', auth()
            ->user()
            ->id)
            ->update(['mobile' => $mobile,'address' => $address, 'city' => $city, 'state' => $state, 'pincode' => $pincode]);

            return redirect()->intended('/index')->with([
                'alert' => 'Your order has been placed successfully!!'
            ]);
    }
}
