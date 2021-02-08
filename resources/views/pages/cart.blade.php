@extends('layouts.default')
@section('content')

<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="//image/cart-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>my cart</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="/index">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span>cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->



<!-- Start Cart Section -->
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
<section class="cart-section pt_large">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="cart-table table-responsive">
                	<table class="table table-bordered text-center">
                    	<thead>
                        	<tr class="row-1">
                            	<th class="row-title"><p>Item</p></th>
                                <th class="row-title"><p>Product Name</p></th>
                                <th class="row-title"><p>Price</p></th>
                                <th class="row-title"><p>Quantity</p></th>
                                <th class="row-title"><p>Subtotal</p></th>
                                <th class="row-title"><p></p></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr class="row-2">
                            	<td class="row-close close-1" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            	<td class="row-img"><img src="/image/cart-inner-img-1.jpg" alt="cart-img"></td>
                                <td class="product-name" data-title="Product"><a href="#">Variable product 001</a></td>
                                <td class="product-price" data-title="Price"><p>₹ 78.00</p></td>
                                <td class="product-quantity" data-title="Quantity">
                                	<div class="quantity_filter">
                                        <input type="button" value="-" class="minus">
                                        <input class="quantity-number qty" type="text" value="2" min="1" max="10">
                                        <input type="button" value="+" class="plus">
                               		</div>
                                </td>
                                <td class="product-total" data-title="Subprice"><p>₹ 156.00</p></td>
                                <td class="row-close close-2" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            </tr>
                            <tr class="row-3">
                            	<td class="row-close close-1" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            	<td class="row-img"><img src="/image/cart-inner-img-2.jpg" alt="cart-img"></td>
                                <td class="product-name" data-title="Product"><a href="#">Ornare sed consequat</a></td>
                                <td class="product-price" data-title="Price"><p>₹ 81.00</p></td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity_filter">
                                        <input type="button" value="-" class="minus">
                                        <input class="quantity-number qty" type="text" value="1" min="1" max="10">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-total" data-title="Subprice"><p>₹ 81.00</p></td>
                                <td class="row-close close-2" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="12">
                                    <ul class="table-btn">
                                        <li><a href="/shop/0" class="btn btn-secondary"><i class="fa fa-chevron-left"></i>Continue Shopping</a></li>
                                        <li><a href="/checkout" class="btn btn-primary"><i class="fa fa-refresh"></i>Checkout</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Section -->
@stop
