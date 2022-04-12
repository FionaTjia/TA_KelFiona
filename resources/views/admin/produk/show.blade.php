@extends('layouts.adminLTE')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Produk {{ $produk->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/produk') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/produk/' . $produk->id . '/edit') }}" title="Edit Produk"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/produk' . '/' . $produk->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Produk" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $produk->id }}</td>
                                    </tr>
                                    <tr><th> Id Produk </th><td> {{ $produk->id_produk }} </td></tr><tr><th> Nama Produk </th><td> {{ $produk->nama_produk }} </td></tr><tr><th> Harga Jual Produk </th><td> {{ $produk->hargaJual_produk }} </td></tr><tr><th> Modal Produk </th><td> {{ $produk->modal_produk }} </td></tr><tr><th> Kategori Produk </th><td> {{ $produk->produk_id_category }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
