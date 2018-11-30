<div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
	{!! Form::label('nisn', 'NISN', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nisn', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('nisn', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 
 <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
	{!! Form::label('kelas', 'Kelas', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('kelas', ['X'=>'X','XI'=>'XI','XII'=>'XII'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Kelas']) !!}
		{!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
	{!! Form::label('ttl', 'Tempat Tanggal Lahir', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('ttl', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('ttl', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
	{!! Form::label('jurusan', 'Jurusan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('jurusan', ['IPA'=>'IPA'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Jurusan']) !!}
		{!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textArea('alamat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('keahlian') ? ' has-error' : '' }}">
	{!! Form::label('keahlian', 'Keahlian', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('keahlian', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('keahlian', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('instragram') ? ' has-error' : '' }}">
	{!! Form::label('instragram', 'Instagram', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('instragram', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('instragram', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	{!! Form::label('email', 'Email', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('email', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>

 <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
	{!! Form::label('facebook', 'Facebook', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('facebook', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 
 <div class="form-group{{ $errors->has('prestasi') ? ' has-error' : '' }}">
	{!! Form::label('prestasi', 'Prestasi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('prestasi', null, ['class'=>'form-control','required','autocomplete'=>'off']) !!}
		{!! $errors->first('prestasi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>