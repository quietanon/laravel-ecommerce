@extends('layouts.default')
@section('content')
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="image/checkout-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="/index">home</a></li>
                        <li><a href="#">/shop/0</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Checkout Section -->
    <div class="alert alert-danger">
        All the orders will be marked as COD, verify your purchases before placing order.
    </div>
<section class="checkout-inner-page pt_large pb_large">
	<div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="checkout-process">
                    <div id="accordion" class="checkout-parts accordion">
                    	<form role="form" action="/place" method="get">
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                         <a class="btn btn-link" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>01</span>Shipping information</a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Name <span class="required_sign">*</span></label>
                                                        <input class="form-control required" name="name" required="" disabled="" placeholder="Enter Your Name" value="{{ $user -> name }}" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Phone Number <span class="required_sign">*</span></label>
                                                        <input  class="form-control required" pattern="[1-9]{1}[0-9]{9}" name="mobile" required="" placeholder="Enter Your Phone Number" value="{{ $user -> mobile }}" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Address <span class="required_sign">*</span></label>
                                                        <input class="form-control required" name="address" required="" placeholder="Enter Your Address" value="{{ $user -> address }}" type="text" minlength="20">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>City <span class="required_sign">*</span></label>
                                                        <input class="form-control required" name="city" required="" placeholder="Enter Your City" value="{{ $user -> city }}" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>State <span class="required_sign">*</span></label>
                                                        <input class="form-control required" name="state" required="" placeholder="Enter Your State" value="{{ $user -> state }}" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Pincode <span class="required_sign">*</span></label>
                                                        <input class="form-control required" name="pincode" required="" placeholder="Enter Your Zipcode" value="{{ $user -> pincode }}" type="text" pattern="[[0-9]{6}">
                                                    </div>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ord_tab">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                        <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span>02</span>Order review</a>
                                    </h5>
                                </div>
                               	<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                        	<div class="order-table">
                                            	<div class="order-review-table table-responsive">
                                                	<table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr class="row-1">
                                                            <th class="row-title text-left">Product Name</th>
                                                            <th class="row-title">Price</th>
                                                            <th class="row-title">Quantity</th>
                                                            <th class="row-title">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="row-2">
                                                            <td class="product-name">Variable product 001</td>
                                                            <td class="product-price">₹ 78.00</td>
                                                            <td class="product-quantity">2</td>
                                                            <td class="product-subtotal">₹ 156.00</td>
                                                        </tr>
                                                        <tr class="row-3">
                                                            <td class="product-name">Ornare sed consequat</td>
                                                            <td class="product-price">₹ 81.00</td>
                                                            <td class="product-quantity">1</td>
                                                            <td class="product-subtotal">₹ 81.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="row-4">
                                                            <td class="text-left" colspan="3">Cart Subtotal</td>
                                                            <td class="pr_subtotal">₹237.00</td>
                                                        </tr>
                                                        <tr class="row-6">
                                                            <td class="text-left" colspan="3">ORder Total</td>
                                                            <td class="product-subtotal">₹232.00</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            	</div>
                                        	</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                    <div class="place-oreder-btn">
                        <button class="btn btn-secondary" type=submit>Place Order</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            	<div class="cart-inner-box box-2 text-center">
                	<div class="ci-title">
                    	<h6>Cart Total</h6>
                    </div>
                    <div class="ci-caption">
                        <ul>
                        	<li>Subtotal <span>₹237.00</span></li>
                            <li>Shipping <span>Free</span></li>
                        </ul>
                    </div>
                    <div class="ci-btn">
                        <ul>
                        	<li>Total Order<span>₹232.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Section -->
@stop
