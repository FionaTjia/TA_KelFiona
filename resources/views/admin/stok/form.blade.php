<div class="form-group {{ $errors->has('id_stok') ? 'has-error' : ''}}">
    <label for="id_stok" class="control-label">{{ 'Id Stok' }}</label>
    <input class="form-control" name="id_stok" type="text" id="id_stok" value="{{ isset($stok->id_stok) ? $stok->id_stok : ''}}" >
    {!! $errors->first('id_stok', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok_id_produk') ? 'has-error' : ''}}">
    <label for="stok_id_produk" class="control-label">{{ 'Stok Id Produk' }}</label>
    <input class="form-control" name="stok_id_produk" type="text" id="stok_id_produk" value="{{ isset($stok->stok_id_produk) ? $stok->stok_id_produk : ''}}" >
    {!! $errors->first('stok_id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok') ? 'has-error' : ''}}">
    <label for="stok" class="control-label">{{ 'Stok' }}</label>
    <input class="form-control" name="stok" type="text" id="stok" value="{{ isset($stok->stok) ? $stok->stok : ''}}" >
    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
