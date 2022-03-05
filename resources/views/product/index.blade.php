@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-list"></i> List Product</div>

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
                    
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Buy Price</th>
                                    <th class="text-center">Sell Price</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td class="text-end">{{ number_format($product->buy_price, '0', '', '.') }}</td>
                                    <td class="text-end">{{ number_format($product->sell_price, '0', '', '.') }}</td>
                                    <td class="text-end">{{ number_format($product->stock, '0', '', '.') }}</td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ url('products', ['id' => $product->id]) }}">
                                            @csrf
                                            @method('delete')

                                            <a class="btn btn-warning btn-sm text-white" href="{{ url('/products/'.$product->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
