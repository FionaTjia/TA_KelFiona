@extends('layouts.adminLTE')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Produk #{{ $produk->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/produk') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/produk/' . $produk->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            {{-- @include ('admin.produk.form', ['formMode' => 'edit']) --}}
                            <div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
                                <label for="id_produk" class="control-label" style="text-align: left">{{ 'Id Produk' }}</label>
                                <input class="form-control" name="id_produk" type="text" id="id_produk" value="{{ isset($produk->id_produk) ? $produk->id_produk : ''}}" >
                                {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
                                <label for="nama_produk" class="control-label" style="text-align: left">{{ 'Nama Produk' }}</label>
                                <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($produk->nama_produk) ? $produk->nama_produk : ''}}" >
                                {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('gambar_produk') ? 'has-error' : ''}}">
                                <label for="gambar_produk" class="control-label" style="text-align: left">{{ 'Gambar Produk' }}</label><br><br>
                                <input class="form-control" name="gambar_produk" type="file" id="gambar_produk" value="{{ isset($produk->gambar_produk) ? $produk->gambar_produk : ''}}" >
                                {!! $errors->first('gambar_produk', '<p class="help-block">:message</p>') !!}
                            </div>
                            <img src="{{ asset ('uploads/products/'.$produk->gambar_produk) }}" width="100px" height="100px"> <br>

                            <div class="form-group {{ $errors->has('hargaJual_produk') ? 'has-error' : ''}}">
                                <label for="hargaJual_produk" class="control-label" style="text-align: left">{{ 'Harga Jual Produk' }}</label>
                                <input class="form-control" name="hargaJual_produk" type="text" id="hargaJual_produk" value="{{ isset($produk->hargaJual_produk) ? $produk->hargaJual_produk : ''}}" >
                                {!! $errors->first('hargaJual_produk', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('modal_produk') ? 'has-error' : ''}}">
                                <label for="modal_produk" class="control-label" style="text-align: left">{{ 'Modal Produk' }}</label>
                                <input class="form-control" name="modal_produk" type="text" id="modal_produk" value="{{ isset($produk->modal_produk) ? $produk->modal_produk : ''}}" >
                                {!! $errors->first('modal_produk', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('product_id_category') ? 'has-error' : ''}}">
                                <label for="product_id_category" class="control-label" style="text-align: left">{{ 'Product Id Category' }}</label>
                                <input class="form-control" name="product_id_category" type="text" id="product_id_category" value="{{ isset($produk->product_id_category) ? $produk->product_id_category : ''}}" >
                                {!! $errors->first('product_id_category', '<p class="help-block">:message</p>') !!}
                            </div>


                            
                            <input class="btn btn-primary" type="submit" value="Update">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
