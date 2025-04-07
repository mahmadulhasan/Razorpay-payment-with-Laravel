@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Error Display -->
    @if ($errors->has('addToCart'))
        <div class="alert alert-danger mb-4">
            {{ $errors->first('addToCart') }}
        </div>
    @endif

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    
    <hr class="my-4">

    <!-- Product List -->
    <div class="row g-4">
        @foreach ($datas as $product)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product['product_image'] }}" 
                         class="card-img-top img-fluid" 
                         alt="{{ $product['product_name'] }}"
                         style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $product['product_name'] }}</h5>
                        <p class="card-text text-muted flex-grow-1">{{ $product['product_description'] }}</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="fw-bold">${{ number_format($product['product_price'], 2) }}</span>
                            
                            <form method="POST" action="/addtocart" class="mb-0">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <input type="hidden" name="product_name" value="{{ $product['product_name'] }}">
                                <input type="hidden" name="product_price" value="{{ $product['product_price'] }}">
                                <input type="hidden" name="product_description" value="{{ $product['product_description'] }}">
                                <input type="hidden" name="product_image" value="{{ $product['product_image'] }}">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection