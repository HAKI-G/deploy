@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order #{{ $order->id }}</h5>
            <p class="card-text"><strong>Product Name:</strong> {{ $order->product_name }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($order->price, 2) }}</p>
            <p class="card-text"><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $order->created_at }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $order->updated_at }}</p>
        </div>
    </div>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>
</div>
@endsection