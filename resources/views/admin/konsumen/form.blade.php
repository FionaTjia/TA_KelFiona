<div class="form-group {{ $errors->has('id_konsumen') ? 'has-error' : ''}}">
    <label for="id_konsumen" class="control-label">{{ 'Id Konsumen' }}</label>
    <input class="form-control" name="id_konsumen" type="text" id="id_konsumen" value="{{ isset($konsuman->id_konsumen) ? $konsuman->id_konsumen : ''}}" >
    {!! $errors->first('id_konsumen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_konsumen') ? 'has-error' : ''}}">
    <label for="nama_konsumen" class="control-label">{{ 'Nama Konsumen' }}</label>
    <input class="form-control" name="nama_konsumen" type="text" id="nama_konsumen" value="{{ isset($konsuman->nama_konsumen) ? $konsuman->nama_konsumen : ''}}" >
    {!! $errors->first('nama_konsumen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hp_konsumen') ? 'has-error' : ''}}">
    <label for="hp_konsumen" class="control-label">{{ 'Hp Konsumen' }}</label>
    <input class="form-control" name="hp_konsumen" type="text" id="hp_konsumen" value="{{ isset($konsuman->hp_konsumen) ? $konsuman->hp_konsumen : ''}}" >
    {!! $errors->first('hp_konsumen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
