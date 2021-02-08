@extends('layouts.default')
@section('content')
<!-- Start Slider Section -->
<section class="slider pt-0">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <?php $enableActive = 0; ?>
            @foreach ($banners as $banner)
                <div class="<?php if($enableActive === 0) {
                echo "active ";
                $enableActive = 1;
            } ?>carousel-item slider-area background_bg" data-img-src="{{ $banner -> image }}">
                <div class="banner_slide_content left-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-9">
                                <div class="slider-caption">
                                    <h1 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">{{ $banner -> name }}</h1>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">{{ $banner -> discription }}</p>
                                    <a href="{{ $banner -> url }}" class="btn btn-primary animation" data-animation="fadeInUp" data-animation-delay="1s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Start Popular Products Section -->
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<section class="popular-products pb-0">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title text-center">
                	<h4>POPULAR PRODUCTS</h4>
                </div>
            </div>
        </div>
		<div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 mb-5">
                <div class="product-box common-cart-box">
                    <div class="product-img common-cart-img">
                        <img src="/{{explode(',', $product -> images)[0]}}" alt="product-img">
                        <div class="hover-option">
                                <form action="/addtocart/{{ $product -> id }}">
                                	<div class="add-cart-btn">
                                    <input type="hidden" name="quantity" value="1" />
                            <button type="submit" @if(($product -> availability) == 0) disabled="" @endif class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="product-info common-cart-info text-center">
                        <a href="/product/{{$product -> id}}" class="cart-name">{{ $product -> name}}</a>
                        <p class="cart-price"><del>₹ {{ $product -> prize }}</del>₹ ${{ $product -> finalPrize }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Popular Products Section -->


<!-- Start Subscribe Section -->
<section class="subscribe-section pt_large pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title white-title text-center">
                	<h4>Follow Our Updates!</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-10 col-sm-12">
            	<div class="subscribe-inner text-center">
                	<p>If you want to get an email from us every time we have a new special offer, then sign up here!</p>
                    <form class="subscribe-form">
                    	<div class="subscribe-input">
                        	<input name="your-email" required="" placeholder="Enter Your Email" type="email">
                        </div>
                        <div class="send-btn">
                        	<button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->
@stop
