@extends('layouts/default')
@section('content')
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="image/shop-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>shop</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="/index">home</a></li>
                        <li><span>shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Shop Section -->
<section class="shop-inner-section pt_large pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-8 col-md-12">
            	<div class="shop-options d-sm-flex justify-content-between align-items-center">
                	<div class="sorting-option">
                    	<select class="sorting-items" name="category">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
                    <div class="showing-items">
                        <p>Showing 1–9 of {{ $count }} results</p>
                    </div>
                    <div class="shop-list_grid">
                        <div class="list_grid-btns">
                        	<a href="javascript:void(0)" class="list-view"><i class="ion-navicon-round"></i></a>
                    		<a href="javascript:void(0)" class="grid-view on"><i class="ion-grid"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row list_grid_container grid justify-content-center">
                    @foreach ($products as $product)
                	<div class="col-md-4 col-6">
                    	<div class="product-box common-cart-box box-1">
                        	<div class="product-img common-cart-img">
                            <img src="/{{explode(',', $product -> images)[0]}}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
a
                                    </div>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                        <a href="/product/{{$product -> id}}" class="cart-name">{{ $product -> name}}</a>
                        <p class="cart-price"><del>₹ {{ $product -> prize }}</del>₹ ${{ $product -> finalPrize }}</p>
                                <p class="product-list-text" style="">{{ $product -> discription }}</p>
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                @for($counter = 1; $counter <= $page; $counter++)
                                    <li><a href="#">{{ $counter }}</a></li>
                                @endfor
                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
        		</div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12 order-lg-first">
            	<div class="shop-sidebar">
                	<div class="side-quantity-box side-box">
                    	<div class="side-box-title">
                        	<h6>Categories</h6>
                        </div>
                        <div class="quantity-box-detail">
                        	<ul>
                            	<li><a href="#">Women<span>(10)</span></a></li>
                                <li><a href="#">Men<span>(05)</span></a></li>
                                <li><a href="#">Footwear<span>(15)</span></a></li>
                                <li><a href="#">Bags And Backpacks<span>(20)</span></a></li>
                                <li><a href="#">Accessories<span>(07)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side-filter-box side-box">
                        <div class="side-box-title">
                            <h6>Filter</h6>
                        </div>
                        <div class="filter-box-detail">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="slider-values d-flex align-items-center">
                                	<p>Price</p>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                	</div>
                    <div class="side-quantity-box side-box">
                    	<div class="side-box-title">
                        	<h6>recent Product</h6>
                        </div>
                        <div class="side-recent-product">
                        	<div class="cart-prodect d-flex">
                                <div class="cart-img">
                                    <img src="image/recent-product-1.png" alt="recent-product">
                                </div>
                                <div class="cart-product">
                                    <a href="/product">Ornare sed consequat</a>
                                    <a href="/product" class="cp-comments"><i class="fa fa-comments"></i> 5 Comments</a>
                                </div>
                            </div>
                            <div class="cart-prodect d-flex">
                                <div class="cart-img">
                                    <img src="image/recent-product-2.png" alt="recent-product">
                                </div>
                                <div class="cart-product">
                                    <a href="/product">Pellentesque posuere</a>
                                    <a href="/product" class="cp-comments"><i class="fa fa-comments"></i> 5 Comments</a>
                                </div>
                            </div>
                            <div class="cart-prodect d-flex">
                                <div class="cart-img">
                                    <img src="image/recent-product-3.png" alt="recent-product">
                                </div>
                                <div class="cart-product">
                                    <a href="/product">Pellentesque posuere</a>
                                    <a href="/product" class="cp-comments"><i class="fa fa-comments"></i> 5 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Shop Section -->
@stop
