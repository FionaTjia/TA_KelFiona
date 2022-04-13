@extends('layouts.adminLTE')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Sale {{ $sale->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/sales') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/sales/' . $sale->id . '/edit') }}" title="Edit Sale"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/sales' . '/' . $sale->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $sale->id }}</td>
                                    </tr>
                                    <tr><th> Id Sales </th><td> {{ $sale->id_sales }} </td></tr><tr><th> Id Produk </th><td> {{ $sale->id_produk }} </td></tr><tr><th> Id Konsumen </th><td> {{ $sale->id_konsumen }} </td></tr><tr><th> Jumlah Sales </th><td> {{ $sale->jumlah_sales }} </td></tr><tr><th> Total Harga Sales </th><td> {{ $sale->total_harga_sales }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
