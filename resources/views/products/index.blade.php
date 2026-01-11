@extends('layouts.app')

@section('title', 'Our Products - Coffee Street')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Product <span style="border-bottom: 3px solid #FF902A;">Management</span></h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('products.create') }}" class="btn btn-lg rounded-5" style="background-color: #FF902A; color: white;">
                <i class="fa fa-plus"></i> Add New Product
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center gap-4">
        @forelse($products as $product)
            <div class="col-lg-3 mt-3">
                <div class="card text-center border-light shadow-lg">
                    <div class="card-body">
                        <div class="image-wrapper position-relative">
                            @if(file_exists(public_path('images/' . $product->image)))
                                <img src="{{ asset('images/' . $product->image) }}" class="rounded-3 img-fluid" alt="{{ $product->name }}">
                            @elseif(file_exists(public_path('images/products/' . $product->image)))
                                <img src="{{ asset('images/products/' . $product->image) }}" class="rounded-3 img-fluid" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('images/img_product.png') }}" class="rounded-3 img-fluid" alt="{{ $product->name }}">
                            @endif
                            <button class="btn-rating position-absolute rounded-5 border border-4"
                                style="background-color: white; border-color: #7E7D7A;">
                                <b>{{ number_format($product->rating, 1) }}</b> 
                                <i class="fa fa-star" style="color: #FFD057;"></i>
                            </button>
                        </div>
                        <div class="mt-2 row justify-content-between">
                            <div class="col-9 text-start">
                                <h5><b>{{ $product->name }}</b></h5>
                            </div>
                            <div class="col-3">
                                <h5><b>{{ number_format($product->price, 0) }} K</b></h5>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-12 text-start mb-2">
                                <span style="color: #7E7D7A;">{{ Str::limit($product->description, 50) }}</span>
                            </div>
                        </div>
                        <div class="row justify-content-between mt-2">
                            <div class="col-6">
                                <span class="badge" style="background-color: {{ $product->category == 'hot' ? '#FF902A' : '#FFD28F' }};">
                                    {{ ucfirst($product->category) }}
                                </span>
                                @if($product->is_featured)
                                    <span class="badge bg-success">Featured</span>
                                @endif
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-primary rounded-5">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm rounded-5" style="background-color: #FF902A; color: white;">
                                        <i class="fa fa-cart-shopping"></i>
                                    </button>
                                </form>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" 
                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-5">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info">
                    <h4>No products found</h4>
                    <p>Start by adding your first product!</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
