@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create New Order</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>${{ number_format($order->price, 2) }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection