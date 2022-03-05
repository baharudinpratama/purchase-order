@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-plus-circle-fill"></i> Add Supplier</div>

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
                    <form method="post" action="{{ route('suppliers.store') }}" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="" class="form-label">Supplier Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address">
                            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone">
                            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
