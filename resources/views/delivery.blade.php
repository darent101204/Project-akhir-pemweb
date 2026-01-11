@extends('layouts.app')

@section('title', 'Delivery Service - Coffee Street')

@section('content')
<section class="hero" style="background-color: #F5EBDA;">
    <div class="container">
        <div class="row align-items-center g-5 py-5">
            <div class="col-lg-12 text-center">
                <h1 class="display-5 fw-semibold text-body-emphasis lh-1 mb-3">
                    Our <span class="fw-semibold" style="color: #FF902A;">Delivery</span> Service
                </h1>
                <p style="color: #7E7D7A;">Fast, reliable, and quality coffee delivery right to your door</p>
            </div>
        </div>
    </div>
</section>

<section class="delivery" id="delivery">
    <div class="container mt-5 mb-5">
        <h4>How to use delivery <span style="border-bottom: 3px solid #FF902A;">service</span></h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mt-3 mb-sm-0">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/cup-coffee.png') }}" width="100px" alt="">
                            <p><b>Choose your coffee</b><br><span>There are 20+ coffees for you</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/food-truck.png') }}" width="100px" alt="">
                            <p><b>We delivery it to you</b><br><span>Choose delivery service</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/cup-coffee2.png') }}" width="100px" alt="">
                            <p><b>Enjoy your coffee</b><br><span>Enjoy with your coffee</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="delivery-details" style="background-color: #F6EBDA;">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h4><i class="fa fa-clock" style="color: #FF902A;"></i> Delivery Hours</h4>
                        <hr>
                        <p><b>Monday - Friday:</b> 7:00 AM - 9:00 PM</p>
                        <p><b>Saturday - Sunday:</b> 8:00 AM - 10:00 PM</p>
                        <p style="color: #7E7D7A;">We ensure your coffee arrives fresh and hot!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h4><i class="fa fa-location-dot" style="color: #FF902A;"></i> Delivery Areas</h4>
                        <hr>
                        <p><b>Free Delivery:</b> Within 5km radius</p>
                        <p><b>Standard Delivery:</b> 5-10km (Additional fee applies)</p>
                        <p style="color: #7E7D7A;">Check your area availability when ordering</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h4><i class="fa fa-truck-fast" style="color: #FF902A;"></i> Delivery Time</h4>
                        <hr>
                        <p><b>Express:</b> 15-30 minutes</p>
                        <p><b>Standard:</b> 30-60 minutes</p>
                        <p style="color: #7E7D7A;">Track your order in real-time via our app</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h4><i class="fa fa-credit-card" style="color: #FF902A;"></i> Payment Methods</h4>
                        <hr>
                        <p><b>Cash on Delivery</b></p>
                        <p><b>Credit/Debit Card</b></p>
                        <p><b>Digital Wallets</b> (GoPay, OVO, Dana)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta text-center py-5">
    <div class="container">
        <h3 class="mb-4">Ready to order?</h3>
        <a href="{{ route('products.index') }}" class="btn btn-lg rounded-5 px-5" 
            style="background-color: #FF902A; color: white;">
            Browse Our Menu
        </a>
    </div>
</section>
@endsection
