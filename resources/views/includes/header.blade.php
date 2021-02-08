<!doctype html>
<html lang="en">

<!-- Mirrored from bestwebcreator.com/ATZShop/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 09:49:25 GMT -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon Icon Css -->
<link rel="icon" type="/image/png" sizes="32x32" href="/image/favicon-32x32.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="/css/animate.css">
<!-- Animation CSS -->
<link rel="stylesheet" href="/css/animate.css" type="text/css">
<!-- Font Css -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/ionicons.min.css" type="text/css" rel="stylesheet">
<!-- Owl Css -->
<link href="/css/owl.carousel.min.css" type="text/css" rel="stylesheet">
<link href="/css/owl.theme.default.min.css" type="text/css" rel="stylesheet">
<!-- Magnific Popup Css -->
<link href="/css/magnific-popup.css" type="text/css" rel="stylesheet">
<!-- Bootstrap Css -->
<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<!-- Price Filter Css -->
<link href="/css/jquery-ui.css" type="text/css" rel="stylesheet">
<!-- Scrollbar Css -->
<link href="/css/mCustomScrollbar.min.css" type="text/css" rel="stylesheet">
<!-- Select2 Css -->
<link href="/css/select2.min.css" type="text/css" rel="stylesheet">
<!-- main css -->
<link href="/css/style.css" type="text/css" rel="stylesheet">
<link href="/css/responsive.css" type="text/css" rel="stylesheet">
<title>ATZ Shop - Online Shopping Store HTML Template</title>

</head>
<body>
<!-- LOADER -->
<div id="preloader">
    <div class="loading_wrap">
    	<img src="/image/loader_logo.png" alt="logo">
    </div>
</div>
<!-- LOADER -->

<!-- Start Header Section -->
<header>
	<div class="header-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                    <ul class="header_list text-md-left text-center">
                        <li><a href="tel:+ 00 123 456 789"><i class="fa fa-phone"></i>+ 00 123 456 789</a></li>
                        <li><a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"></i>info@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="header_list text-md-right text-center">
                        @if( auth()->check() )
                        <li><a href="#">{{ auth()->user()->name }}</a></li>
                        <li><a href="/logout">Logout</a></li>
                        @else
                        <li><a href="#test-popup1" class="open-popup-link">Login</a>
                            <div id="test-popup1" class="white-popup lr-popup mfp-hide text-center">
                                <h4>Login</h4>
                                <form class="subscribe-popup-form" method="get" action="/login">
                                    <input name="email" required type="email" placeholder="Enter Your Email">
                                    <input name="password" required type="password" placeholder="Enter Your Password">
                                    <div class="form-check text-left">
                                        <label>Remember me
                                            <input name="remember" class="defult-check" type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="#" class="forgot-password float-right">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary" title="Login" type="submit">Login</button>
                                </form>
                                <h6>Don't have an account?</h6>
                                <a href="#test-popup2" class="sign-up open-popup-link">Click here to Sign up</a>
                            </div>
                            <div id="test-popup2" class="white-popup lr-popup mfp-hide">
                                <h4>Registration</h4>
                                    <form action="/register" method="get" class="login_form ">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" required="" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address <span class="required">*</span></label>
                                            <input type="email" required="" class="form-control" name="email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="required">*</span></label>
                                            <input minlength="8" class="form-control" required="" type="password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="login" value="Register">Register</button>
                                        </div>
                                    </form>
                            </div>
                        </li>
                        <li><a href="/account">My Account</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mdl">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="hm-inner d-sm-flex align-items-center justify-content-between">
                    	<div class="header-logo">
                        	<a href="/"><img src="/image/logo.png" alt="logo"></a>
                        </div>
                        <form class="header-form" action="/shop/0" method="get">
                        <input class="search-box" placeholder="Search Product..."  required value="" type="search" name="searchbox">
                        <button type="submit">Search</button>
                    </form>
                    	<div class="header-right">
                        	<div class="header-cart">
                            <a href="#">
                                <div class="cart-icon">
                                    <img src="/image/cart-icon.png" alt="cart-icon">
                                    <span>{{ $count }}</span>
                                </div>
                            @if ($total !== 0)
                                ₹{{ $total }}<i class="fa fa-angle-down"></i>
                            @endif
                            </a>
                            @if ($total !== 0)
                            <div class="cart-box">
                                <div class="cart-info">
                                @foreach ($headercarts as $cart)
                                <div class="cart-prodect d-flex">
                                    <div class="cart-img">
                                    <img src="/{{explode(',', $cart -> images)[0]}}" width="50px" heigth="100px" alt="product-img">
                                    </div>
                                    <div class="cart-product">
                                        <a href="/product/{{ $cart -> product_id }}">{{ $cart -> name }}</a>
                                        <p>₹ {{ $cart -> finalPrize * $cart -> quantity }}</p>
                                    </div>
                                    <a href="/removefromcart/{{ $cart -> id }}" class="close-icon d-flex align-items-center"><i class="ion-close"></i></a>
                                </div>
                                @endforeach
                            </div>
                                <div class="price-prodect d-flex align-items-center justify-content-between">
                                <p class="total">total</p>
                                <p class="total-price">₹ {{ $total }}</p>
                            </div>
                                <div class="cart-btn">
                                    <a href="/cart" class="btn btn-primary">View Cart</a>
                                </div>
                            </div>
                            @endif
                    	</div>
                        	<div class="d-lg-none mm_icon">
                                <div class="form-captions" id="search">
                                    <button type="submit" class="submit-btn-2"><i class="fa fa-search"></i></button>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-btm">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<nav class="navbar navbar-expand-lg navbar-light">
                    	<div class="header-logo">
                        	<a href="#"><img src="/image/logo.png" alt="logo"></a>
                        </div>
                      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                            <a href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="/about">About us</a>
                                </li>
                                <li>
                                <li class="nav-item">
                                	<a class="nav-link" href="/shop/0">Shop</a>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                      	</div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->
