<div class="form-group {{ $errors->has('id_supplier') ? 'has-error' : ''}}">
    <label for="id_supplier" class="control-label">{{ 'Id Supplier' }}</label>
    <input class="form-control" name="id_supplier" type="text" id="id_supplier" value="{{ isset($supplier->id_supplier) ? $supplier->id_supplier : ''}}" >
    {!! $errors->first('id_supplier', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_supplier') ? 'has-error' : ''}}">
    <label for="nama_supplier" class="control-label">{{ 'Nama Supplier' }}</label>
    <input class="form-control" name="nama_supplier" type="text" id="nama_supplier" value="{{ isset($supplier->nama_supplier) ? $supplier->nama_supplier : ''}}" >
    {!! $errors->first('nama_supplier', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
