@extends('layouts.app')

@section('title', 'About Us - Coffee Street')

@section('content')
<section class="about" id="about" style="background-image: linear-gradient(to bottom, #fff 20%, #F6EBDA 20%);">
    <div class="container pb-5">
        <div class="row">
            <div class="col-sm-4 mt-3 mb-sm-0">
                <div class="text-center">
                    <div class="card text-center border-4 shadow-lg" style="border-color: #fff;">
                        <img src="{{ asset('images/latteart.png') }}" class="img-fluid" alt="latte about">
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-7 mt-3 d-flex align-items-center">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h4>About <span style="border-bottom: 3px solid #FF902A;">us</span></h4>
                    </div>
                    <div class="col-12 mt-3">
                        <h5>We provide quality coffee, <br> and ready to deliver.</h5>
                    </div>
                    <div class="col-12 mt-3">
                        <p style="color: #7E7D7A;">We are a company that makes and distributes <br> delicious
                            drinks. Our main product is made with a <br> secret recipe and available in stores
                            worldwide.</p>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 rounded-5"
                            style="background-color: #2F2105; border-color: #2F2105; color: #FF902A;">Get your
                            coffee</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-story py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Our <span style="border-bottom: 3px solid #FF902A;">Story</span></h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h4 style="color: #FF902A;">Founded with Passion</h4>
                <p style="color: #7E7D7A;">
                    Coffee Street was born from a simple passion: to bring the finest coffee experience to everyone. 
                    Our journey began in 2020 with a small café and a big dream. Today, we serve thousands of 
                    coffee lovers daily, maintaining the same commitment to quality and taste.
                </p>
                <p style="color: #7E7D7A;">
                    Every cup we serve is crafted with carefully selected beans, roasted to perfection, 
                    and prepared by our skilled baristas who share our love for exceptional coffee.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4" style="background-color: #F6EBDA;">
                        <h5><b>Our Mission</b></h5>
                        <p style="color: #7E7D7A;">
                            To deliver premium quality coffee that brightens your day, 
                            one cup at a time. We believe great coffee should be accessible, 
                            affordable, and always delicious.
                        </p>
                        <hr>
                        <h5><b>Our Values</b></h5>
                        <ul style="color: #7E7D7A;">
                            <li>Quality ingredients, always fresh</li>
                            <li>Sustainable sourcing practices</li>
                            <li>Customer satisfaction first</li>
                            <li>Innovation in every brew</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us py-5" style="background-color: #F6EBDA;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Why Choose <span style="border-bottom: 3px solid #FF902A;">Coffee Street</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center">
                    <div class="card-body p-4">
                        <i class="fa fa-coffee fa-3x mb-3" style="color: #FF902A;"></i>
                        <h5><b>Premium Quality</b></h5>
                        <p style="color: #7E7D7A;">
                            We source the finest coffee beans from around the world, 
                            ensuring every cup meets our high standards.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center">
                    <div class="card-body p-4">
                        <i class="fa fa-users fa-3x mb-3" style="color: #FF902A;"></i>
                        <h5><b>Expert Baristas</b></h5>
                        <p style="color: #7E7D7A;">
                            Our team of skilled baristas are trained in the art of coffee making, 
                            bringing expertise to every brew.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center">
                    <div class="card-body p-4">
                        <i class="fa fa-heart fa-3x mb-3" style="color: #FF902A;"></i>
                        <h5><b>Made with Love</b></h5>
                        <p style="color: #7E7D7A;">
                            Every product is crafted with care and attention to detail, 
                            because we believe coffee is more than just a drink.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta text-center py-5">
    <div class="container">
        <h3 class="mb-4">Experience the Coffee Street difference</h3>
        <a href="{{ route('products.index') }}" class="btn btn-lg rounded-5 px-5" 
            style="background-color: #FF902A; color: white; text-decoration: none;">
            Explore Our Products
        </a>
    </div>
</section>
@endsection
