@extends('layouts.app_new')
@section('content')
@if($data_siswa == 1)
	@if($data_siswa1->status == 0) 
		<h2 class="tittle">Terima Kasih Telah Mendaftar, <br> Silahkan Melakukan Pembayaran Pendaftaran</h2>
		<p style="color:red">*untuk melanjutkan proses pendaftaran silahkan melakukan pendaftaran di bawah dan siap kan tanda bukti/foto struk transfer</p>
		{!! Form::open(['url' => route('ppdb.bukti_pembayaran'),'method' => 'post','files'=>'true', 'class'=>'form-horizontal']) !!}
			@include('_formbuktipembayaran')
		{!! Form::close() !!} 
	@elseif($data_siswa1->status == 1)  
		<h2 class="tittle">Terima Kasih Telah Mendaftar, <br>Pendaftaran Anda Sedang Di Proses oleh Admin</h2>
	@endif
@elseif($data_siswa == 0) 
	<div class="row">
	    <div class="col-md-12">
	        <div class="card"> 
	            <h2 class="card-title">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h2>    
	        </div>  
	    </div>  
	</div>

	{!! Form::open(['url' => route('ppdb.daftar_siswa'),'method' => 'post','files'=>'true', 'class'=>'form-horizontal']) !!}
		@include('_formppdb')
	{!! Form::close() !!} 
@endif

@endsection
