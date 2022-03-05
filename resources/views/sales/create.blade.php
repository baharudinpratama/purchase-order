@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-plus-circle-fill"></i> Purchase Order</div>

                <div class="card-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            <i class="bi bi-check-circle-fill"></i> 
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                    <form method="post" action="{{ route('sales.store') }}" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="" class="form-label">Customer</label>
                            <select name="id_customer" id="" class="form-select">
                                <option selected disabled>Select customer</option>
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            @error('customer') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Product</label>
                            <select name="id_product" id="" class="form-select">
                                <option selected disabled>Select product</option>
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            @error('product') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number" class="form-control @error('qty') is-invalid @enderror" value="{{ old('qty') }}" name="qty">
                            @error('qty') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
