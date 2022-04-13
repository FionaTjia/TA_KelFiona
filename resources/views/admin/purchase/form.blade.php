<div class="form-group {{ $errors->has('id_purchase') ? 'has-error' : ''}}">
    <label for="id_purchase" class="control-label" style="text-align: left">{{ 'Id Purchase' }}</label>
    <input class="form-control" name="id_purchase" type="text" id="id_purchase" value="{{ isset($purchase->id_purchase) ? $purchase->id_purchase : ''}}" >
    {!! $errors->first('id_purchase', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah_purchase') ? 'has-error' : ''}}">
    <label for="jumlah_purchase" class="control-label" style="text-align: left">{{ 'Jumlah Purchase' }}</label>
    <input class="form-control" name="jumlah_purchase" type="text" id="jumlah_purchase" value="{{ isset($purchase->jumlah_purchase) ? $purchase->jumlah_purchase : ''}}" >
    {!! $errors->first('jumlah_purchase', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
    <label for="harga" class="control-label" style="text-align: left">{{ 'Harga' }}</label>
    <input class="form-control" name="harga" type="text" id="harga" value="{{ isset($purchase->harga) ? $purchase->harga : ''}}" >
    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label" style="text-align: left">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="text" id="id_produk" value="{{ isset($purchase->id_produk) ? $purchase->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_supplier') ? 'has-error' : ''}}">
    <label for="id_supplier" class="control-label" style="text-align: left">{{ 'Id Supplier' }}</label>
    <input class="form-control" name="id_supplier" type="text" id="id_supplier" value="{{ isset($purchase->id_supplier) ? $purchase->id_supplier : ''}}" >
    {!! $errors->first('id_supplier', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
