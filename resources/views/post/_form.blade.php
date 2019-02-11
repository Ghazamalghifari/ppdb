<div class="form-group{{ $errors->has('judul_artikel') ? ' has-error' : '' }}">
	{!! Form::label('judul_artikel', 'Judul Artikel', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('judul_artikel', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('judul_artikel', '<p class="help-block">:message</p>') !!}
	</div>
</div> 


<label><b>Isi Artikel :</b></label>

<textarea id="konten" class="form-control" name="isi_artikel" rows="50" cols="50">
	@if (isset($post) && $post->isi_artikel)
		{{ $post->isi_artikel }}
	@endif
</textarea>  

 <div class="form-group{{ $errors->has('gambar_artikel') ? ' has-error' : '' }}">
{!! Form::label('gambar_artikel', 'Gambar Artikel', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::file('gambar_artikel') !!}
@if (isset($post) && $post->gambar_artikel)
<p><br>
	{!! Html::image(asset('gambar_artikel/'.$post->gambar_artikel), null, ['class'=>'img-rounded img responsive','style'=>'width:70%;']) !!}
</p>
@endif
{!! $errors->first('gambar_artikel', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>