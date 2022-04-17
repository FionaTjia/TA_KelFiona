<div class="form-group {{ $errors->has('stok_id_produk') ? 'has-error' : ''}}">
    <label for="stok_id_produk" class="control-label" style="text-align: left">{{ 'Id Produk' }}</label>
    <input class="form-control" name="stok_id_produk" type="text" id="stok_id_produk" maxlength="11" required value="{{ isset($stok->stok_id_produk) ? $stok->stok_id_produk : ''}}" >
    {!! $errors->first('stok_id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok') ? 'has-error' : ''}}">
    <label for="stok" class="control-label" style="text-align: left">{{ 'Stok' }}</label>
    <input class="form-control" name="stok" type="number" id="stok" required value="{{ isset($stok->stok) ? $stok->stok : ''}}" >
    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
