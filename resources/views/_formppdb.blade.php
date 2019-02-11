<div class="row">
<div class="col-md-12">
    <div class="card"> 
    <h4 class="card-title" style=" text-align: left;padding-left: 2%"> A. Identitas Siswa</h4>
      <div class="container">
        <div class="row"> 
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">  
                {!! Form::text('nisn', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'NISN']) !!}<br>
                @if ($errors->has('nisn'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nisn') }}</strong>
                    </span>
                @endif
            </div> 
            </div>
            
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('nomor_sttb') ? ' has-error' : '' }}"> 
                {!! Form::text('nomor_sttb', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nomor STTB/Tahun Lulus']) !!}<br>
                @if ($errors->has('nomor_sttb'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_sttb') }}</strong>
                    </span>
                @endif
            </div> 
            </div>

            <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}"> 
                {!! Form::text('nama', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama(Sesuai Ijazah)']) !!}<br> 
                @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
            </div> 
            </div>

            <div class="col-md-6">
            <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">  
                {!! Form::text('ttl', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Tempat Tanggal Lahir']) !!}<br>
                @if ($errors->has('ttl'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ttl') }}</strong>
                    </span>
                @endif
            </div> 
            </div>
         
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}"> 
                  {!! Form::select('agama', ['Islam'=>'Islam'], null, ['class'=>'form-control selectpicker','data-style'=>'btn btn-link', 'placeholder' => 'Pilih Agama']) !!}
                @if ($errors->has('agama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('agama') }}</strong>
                    </span>
                @endif
            </div> 
            </div>  
         
            <div class="col-md-6"> 
            <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}"> 
                  {!! Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'form-control selectpicker', 'placeholder' => 'Pilih Jenis Kelamin','data-style'=>'btn btn-link']) !!}
                @if ($errors->has('jenis_kelamin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                    </span>
                @endif
            </div> 
            </div>  

            <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}"> 
                {!! Form::text('alamat', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Alamat Rumah']) !!}<br>
                @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                @endif
            </div> 
            </div>

            <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama_sekolah') ? ' has-error' : '' }}">  
                {!! Form::text('nama_sekolah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama Sekolah']) !!}<br>
                @if ($errors->has('nama_sekolah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_sekolah') }}</strong>
                    </span>
                @endif
            </div> 
            </div>
            
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat_sekolah') ? ' has-error' : '' }}"> 
                {!! Form::text('alamat_sekolah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Alamat Sekolah']) !!}<br>
                @if ($errors->has('alamat_sekolah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_sekolah') }}</strong>
                    </span>
                @endif
            </div> 
            </div>

            <div class="col-md-6"> 
                <label></label>
            <div class="form-group{{ $errors->has('kompetisi_bakat') ? ' has-error' : '' }}"> 
                  {!! Form::select('kompetisi_bakat',['a.Regular  class'=>'a.Regular  class','b. Takhosus tahsin tahfidz class'=>'b.Takhosus tahsin tahfidz class','c.Programmer class'=>'c. Programmer class','d.Journalist class'=>'d. Journalist class','e. Cooking class'=>'e. Cooking class','f. Athlete class'=>'f. Athlete class'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Kompetisi minat/Kelas bakat'], null, ['class'=>'form-control selectpicker', 'placeholder' => 'Pilih Kompetisi minat/Kelas bakat','data-style'=>'btn btn-link']) !!}
                @if ($errors->has('kompetisi_bakat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kompetisi_bakat') }}</strong>
                    </span>
                @endif
            </div> 
            </div>  
        </div> 
      </div> 
    </div>
</div>

    <div class="col-md-6">
        <div class="card"> 
        <h4 class="card-title" style=" text-align: left;padding-left: 2%"> B. Identitas Orang Tua (Ayah)</h4>
           
            <div class="container">
            <div class="form-group{{ $errors->has('nama_ayah') ? ' has-error' : '' }}"> 
                {!! Form::text('nama_ayah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama Ayah']) !!}<br>
                @if ($errors->has('nama_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_ayah') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('ttl_ayah') ? ' has-error' : '' }}"> 
                {!! Form::text('ttl_ayah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Tempat Tanggal Lahir(Ayah)']) !!}<br>
                @if ($errors->has('ttl_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ttl_ayah') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('agama_ayah') ? ' has-error' : '' }}"> 
                  {!! Form::select('agama_ayah', ['Islam'=>'Islam'], null, ['class'=>'form-control selectpicker','data-style'=>'btn btn-link', 'placeholder' => 'Pilih Agama']) !!}
                @if ($errors->has('agama_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('agama_ayah') }}</strong>
                    </span>
                @endif
            </div> 

            <div class="form-group{{ $errors->has('pekerjaan_ayah') ? ' has-error' : '' }}"> 
                {!! Form::text('pekerjaan_ayah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Pekerjaan(Ayah)']) !!}<br>
                @if ($errors->has('pekerjaan_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pekerjaan_ayah') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('alamat_ayah') ? ' has-error' : '' }}"> 
                {!! Form::text('alamat_ayah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Alamat(Ayah)']) !!}<br>
                @if ($errors->has('alamat_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_ayah') }}</strong>
                    </span>
                @endif
            </div>
             
            <div class="form-group{{ $errors->has('no_ayah') ? ' has-error' : '' }}"> 
                {!! Form::number('no_ayah', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'No WA/HP (Ayah)']) !!}<br> 
                @if ($errors->has('no_ayah'))
                    <span class="help-block">
                        <strong>{{ $errors->first('no_ayah') }}</strong>
                    </span>
                @endif
            </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card"> 
        <h4 class="card-title" style=" text-align: left;padding-left: 2%"> C. Identitas Orang Tua (Ibu)</h4>
           
            <div class="container">
           
            <div class="form-group{{ $errors->has('nama_ibu') ? ' has-error' : '' }}"> 
                {!! Form::text('nama_ibu', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama Ibu']) !!}<br>
                @if ($errors->has('nama_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_ibu') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('ttl_ibu') ? ' has-error' : '' }}"> 
                {!! Form::text('ttl_ibu', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Tempat Tanggal Lahir(Ibu)']) !!}<br>
                @if ($errors->has('ttl_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ttl_ibu') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('agama_ibu') ? ' has-error' : '' }}"> 
                  {!! Form::select('agama_ibu', ['Islam'=>'Islam'], null, ['class'=>'form-control selectpicker','data-style'=>'btn btn-link', 'placeholder' => 'Pilih Agama']) !!}
                @if ($errors->has('agama_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('agama_ibu') }}</strong>
                    </span>
                @endif
            </div> 

            <div class="form-group{{ $errors->has('pekerjaan_ibu') ? ' has-error' : '' }}"> 
                {!! Form::text('pekerjaan_ibu', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Pekerjaan(Ibu)']) !!}<br>
                @if ($errors->has('pekerjaan_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pekerjaan_ibu') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('alamat_ibu') ? ' has-error' : '' }}"> 
                {!! Form::text('alamat_ibu', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Alamat(Ibu)']) !!}<br>
                @if ($errors->has('alamat_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat_ibu') }}</strong>
                    </span>
                @endif
            </div>
             
            <div class="form-group{{ $errors->has('no_ibu') ? ' has-error' : '' }}"> 
                {!! Form::number('no_ibu', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'No WA/HP (Ibu)']) !!}<br> 
                @if ($errors->has('no_ibu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('no_ibu') }}</strong>
                    </span>
                @endif
            </div>
            </div>
        </div>
    </div> 

    <div class="container">
    <div class="card"> 
        <h4 class="card-title" > Upload</h4>
    <div class="row">
        <div class="col-md-6">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput"> 
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Foto Kartu Keluarga</span>
                    {!! Form::file('foto_kk') !!}
                </span> 
                    {!! $errors->first('foto_kk', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput"> 
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Foto Rapot Semester Akhir</span>
                    {!! Form::file('foto_rapot') !!}
                </span> 
                    {!! $errors->first('foto_rapot', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput"> 
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Biodata Di Rapot</span>
                    {!! Form::file('foto_biodata_rapot') !!}
                </span> 
                    {!! $errors->first('foto_biodata_rapot', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput"> 
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Foto Siswa</span>
                    {!! Form::file('foto_siswa') !!}
                </span> 
                    {!! $errors->first('foto_siswa', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>
    </div>
    </div> 
</div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <button type="submit" class="btn btn-large btn-primary  btn-block">
                    Daftar Sekarang!!!
                    </button> 
                </div>
            </div>
        </div>
    </div>