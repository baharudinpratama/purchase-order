@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-pencil-square"></i> Update Product</div>

                <div class="card-body">
                    <form method="post" action="{{ url('products', ['id' => $product->id]) }}" class="row g-3">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" name="name">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Buy Price</label>
                            <input type="number" class="form-control @error('buy_price') is-invalid @enderror" value="{{ $product->buy_price }}" name="buy_price">
                            @error('buy_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Sell Price</label>
                            <input type="number" class="form-control @error('sell_price') is-invalid @enderror" value="{{ $product->sell_price }}" name="sell_price">
                            @error('sell_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Stock</label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" value="{{ $product->stock }}" name="stock">
                            @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
