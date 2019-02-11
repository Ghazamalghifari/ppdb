<div class="col-md-6 ml-auto mr-auto">
<div class="card"> 
    <h4 class="card-title" > Bukti Pembayaran Pendaftaran</h4>
    <div class="container">
    <div class="row">
        <div class="col-md-12 ml-auto mr-auto"> 
            <div class="form-group bmd-form-group">
                <label class="bmd-label-static">Penerima :</label>
                <input type="text" class="form-control" placeholder="Marya Indah Purnama" disabled>
            </div>

            <div class="form-group bmd-form-group">
                <label class="bmd-label-static">Nomor Rekening :</label>
                <input type="text" class="form-control" placeholder="351039597" disabled>
            </div>

            <div class="form-group bmd-form-group">
                <label class="bmd-label-static">Bank :</label>
                <input type="text" class="form-control" placeholder="Bank Muamalat" disabled>
            </div>
 
            <div class="form-group bmd-form-group{{ $errors->has('nama_pengirim') ? ' has-error' : '' }}"> 
                <label class="bmd-label-static">Nama Pengirim :</label>
                {!! Form::text('nama_pengirim', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama Pengirim']) !!}<br>
                @if ($errors->has('nama_pengirim'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_pengirim') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group bmd-form-group{{ $errors->has('nama_bank') ? ' has-error' : '' }}"> 
                <label class="bmd-label-static">Nama Bank :</label>
                {!! Form::text('nama_bank', null, ['class'=>'form-control','required','autocomplete'=>'off','autofocus','placeholder'=>'Nama Bank']) !!}<br>
                @if ($errors->has('nama_bank'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama_bank') }}</strong>
                    </span>
                @endif
            </div>


            <div class="fileinput fileinput-new text-center" data-provides="fileinput"> 
                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                        <span class="fileinput-new">Foto Bukti Pembayaran</span>
                <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                        {!! Form::file('foto_bukti') !!}
                    </span> 
                        {!! $errors->first('foto_bukti', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <button type="submit" class="btn btn-large btn-primary btn-block">
                           Kirim
                            </button> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div> 
</div>