<div class="form-group {{ $errors->has('id_sales') ? 'has-error' : ''}}">
    <label for="id_sales" class="control-label" style="text-align: left">{{ 'Id Sales' }}</label>
    <input class="form-control" name="id_sales" type="text" id="id_sales" value="{{ isset($sale->id_sales) ? $sale->id_sales : ''}}" >
    {!! $errors->first('id_sales', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label" style="text-align: left">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="text" id="id_produk" value="{{ isset($sale->id_produk) ? $sale->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_konsumen') ? 'has-error' : ''}}">
    <label for="id_konsumen" class="control-label" style="text-align: left">{{ 'Id Konsumen' }}</label>
    <input class="form-control" name="id_konsumen" type="text" id="id_konsumen" value="{{ isset($sale->id_konsumen) ? $sale->id_konsumen : ''}}" >
    {!! $errors->first('id_konsumen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah_sales') ? 'has-error' : ''}}">
    <label for="jumlah_sales" class="control-label" style="text-align: left">{{ 'Jumlah Sales' }}</label>
    <input class="form-control" name="jumlah_sales" type="text" id="jumlah_sales" value="{{ isset($sale->jumlah_sales) ? $sale->jumlah_sales : ''}}" >
    {!! $errors->first('jumlah_sales', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_harga_sales') ? 'has-error' : ''}}">
    <label for="total_harga_sales" class="control-label" style="text-align: left">{{ 'Total Harga Sales' }}</label>
    <input class="form-control" name="total_harga_sales" type="text" id="total_harga_sales" value="{{ isset($sale->total_harga_sales) ? $sale->total_harga_sales : ''}}" >
    {!! $errors->first('total_harga_sales', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
