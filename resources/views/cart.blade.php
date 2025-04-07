@extends('layouts.app')

@section('content')
<div class="container p5">
    <div class="max-w-4xl mx-auto  bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Shopping Cart</h2>
        
        @if(count($datas) > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        
                        @foreach($datas as $data)
                            @php
                                $total += floatval($data['product_price']);
                            @endphp
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ $data['product_image'] }}" 
                                             alt="product" 
                                             class="img-thumbnail" 
                                             style="width: 48px; height: 48px; object-fit: cover;">
                                        <span>{{ $data['product_name'] }}</span>
                                    </div>
                                </td>
                                <td class="align-middle">{{ $data['product_description'] }}</td>
                                <td class="align-middle">₹{{ number_format($data['product_price'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 gap-4">
                <div class="w-100 w-md-50"></div> <!-- Empty spacer div -->

                <div class="w-100 w-md-33 bg-light p-4 rounded">
                    <div class="d-flex justify-content-between fs-5 fw-bold">
                        <span>Total:</span>
                        <span>₹{{ number_format($total, 2) }}</span>
                    </div>
                </div>
            </div>
            <form action="razorpay/payment" method="POST" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <input type="hidden" name="amount" value="{{ $total }}">
                <button type="submit" class="btn btn-success w-100 py-3">
                    Proceed to Checkout
                </button>
            </form>
        @else
            <div class="alert alert-info text-center">
                Your cart is empty
            </div>
        @endif
    </div>
</div>
@endsection