@extends('layouts.adminLTE')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Purchase {{ $purchase->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/purchase') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/purchase/' . $purchase->id . '/edit') }}" title="Edit Purchase"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/purchase' . '/' . $purchase->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Purchase" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $purchase->id }}</td>
                                    </tr>
                                    <tr><th> Id Purchase </th><td> {{ $purchase->id_purchase }} </td></tr><tr><th> Jumlah Purchase </th><td> {{ $purchase->jumlah_purchase }} </td></tr><tr><th> Harga </th><td> {{ $purchase->harga }} </td></tr><tr><th> Id Produk </th><td> {{ $purchase->id_produk }} </td></tr><tr><th> Id Supplier </th><td> {{ $purchase->id_supplier }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
