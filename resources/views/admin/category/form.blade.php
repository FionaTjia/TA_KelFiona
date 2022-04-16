<div class="form-group {{ $errors->has('id_category') ? 'has-error' : ''}}">
    <label for="id_category" class="control-label" style="text-align: left">{{ 'Id Category' }}</label>
    <input class="form-control" name="id_category" type="text" id="id_category" maxlength="11" required value="{{ isset($category->id_category) ? $category->id_category : ''}}" >
    {!! $errors->first('id_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_category') ? 'has-error' : ''}}">
    <label for="nama_category" class="control-label" style="text-align: left">{{ 'Nama Category' }}</label>
    <input class="form-control" name="nama_category" type="text" id="nama_category" required value="{{ isset($category->nama_category) ? $category->nama_category : ''}}" >
    {!! $errors->first('nama_category', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
