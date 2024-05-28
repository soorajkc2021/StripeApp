<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Products</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <h6>${{ $product->price }}</h6>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ url('/product', $product->id) }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
