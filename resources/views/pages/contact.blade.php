@extends('layouts.default')
@section('content')

<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="/image/contact-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Contact</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="/index">home</a></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Contact Detail Section -->
<section class="contact-inner-page pt_large">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12">
            	<div class="contact-inputs">
                    <div class="title text-left">
                        <h4>Leave a Message</h4>
                    </div>
                    <form method="post" name="enq" class="contact-form form-with-label">
                        <div class="input-1">
                            <label>Your Name<span>*</span></label>
                            <input required="" class="form-control" id="first-name" placeholder="Enter Your Name" value="" type="text">
                        </div>
                        <div class="input-2">
                            <label>Your Email<span>*</span></label>
                            <input required="" class="form-control" id="email" placeholder="Enter Your Email" value="" type="email">
                        </div>
                        <div class="input-3">
                            <label>Your Phone<span>*</span></label>
                            <input required="" class="form-control" id="phone" placeholder="Enter Your Phone" value="" type="text">
                        </div>
                        <div class="input-4">
                            <label>subject<span>*</span></label>
                            <input required="" class="form-control" id="subject" placeholder="Enter Your Subject" value="" type="text">
                        </div>
                        <div class="input-5">
                            <label>Message<span>*</span></label>
                            <textarea required="" rows="3" class="form-control" id="description" placeholder="Your Message"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" id="submitButton" class="btn btn-primary">submit</button>
                        </div>
                        <div class="col-md-12">
                            <div id="alert-msg" class="alert-msg text-center"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-details">
                    <div class="title text-left">
                        <h4>Let's be in touch</h4>
                    </div>
                    <div class="contact-inner">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in</p>
                        <ul class="contact-locations">
                            <li><span class="fa fa-map-marker"></span><p>6036 Richmond hwy., Alexandria, VA 22303</p></li>
                            <li><span class="fa fa-phone"></span><p>+025 2155 3255</p></li>
                            <li><span class="fa fa-envelope-o"></span><a href="#">info@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Detail Section -->
@stop
