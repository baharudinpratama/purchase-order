@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-list"></i> Recap</div>

                <div class="card-body">
                    <p>Date range</p>
                    <div class="col-12 mb-3">
                        <form action="">
                            <input type="date" class="btn btn-light border" name="dateStart" id="" placeholder="yyyy-mm-dd"> -
                            <input type="date" class="btn btn-light border" name="dateEnd" id="" placeholder="yyyy-mm-dd">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Purchase</th>
                                    <th scope="col">Sales</th>
                                    <th scope="col">Profit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">{{ number_format($purchaseTotal, '0', '', '.') }}</td>
                                    <td>{{ number_format($salesTotal, '0', '', '.') }}</td>
                                    <td>{{ number_format($profit, '0', '', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
