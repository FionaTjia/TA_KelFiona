@extends('layouts.adminLTE')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Konsuman {{ $konsuman->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/konsumen') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/konsumen/' . $konsuman->id . '/edit') }}" title="Edit Konsuman"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/konsumen' . '/' . $konsuman->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Konsuman" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $konsuman->id }}</td>
                                    </tr>
                                    <tr><th> Id Konsumen </th><td> {{ $konsuman->id_konsumen }} </td></tr><tr><th> Nama Konsumen </th><td> {{ $konsuman->nama_konsumen }} </td></tr><tr><th> Hp Konsumen </th><td> {{ $konsuman->hp_konsumen }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
