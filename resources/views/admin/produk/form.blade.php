<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label" style="text-align: left">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="text" id="id_produk" maxlength="11" required value="{{ isset($produk->id_produk) ? $produk->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label" style="text-align: left">{{ 'Nama Produk' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" required value="{{ isset($produk->nama_produk) ? $produk->nama_produk : ''}}" >
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gambar_produk') ? 'has-error' : ''}}">
    <label for="gambar_produk" class="control-label" style="text-align: left">{{ 'Gambar Produk' }}</label><br><br>
    <input class="form-control" name="gambar_produk" type="file" id="gambar_produk" required value="{{ isset($produk->gambar_produk) ? $produk->gambar_produk : ''}}" >
    {!! $errors->first('gambar_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hargaJual_produk') ? 'has-error' : ''}}">
    <label for="hargaJual_produk" class="control-label" style="text-align: left">{{ 'Harga Jual Produk' }}</label>
    <input class="form-control" name="hargaJual_produk" type="number" id="hargaJual_produk" required value="{{ isset($produk->hargaJual_produk) ? $produk->hargaJual_produk : ''}}" >
    {!! $errors->first('hargaJual_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modal_produk') ? 'has-error' : ''}}">
    <label for="modal_produk" class="control-label" style="text-align: left">{{ 'Modal Produk' }}</label>
    <input class="form-control" name="modal_produk" type="number" id="modal_produk" required value="{{ isset($produk->modal_produk) ? $produk->modal_produk : ''}}" >
    {!! $errors->first('modal_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_id_category') ? 'has-error' : ''}}">
    <label for="product_id_category" class="control-label" style="text-align: left">{{ 'Product Id Category' }}</label>
    <input class="form-control" name="product_id_category" type="text" id="product_id_category"  maxlength="11" required value="{{ isset($produk->product_id_category) ? $produk->product_id_category : ''}}" >
    {!! $errors->first('product_id_category', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
