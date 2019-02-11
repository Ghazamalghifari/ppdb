@extends('layouts.app_new')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card"> 
            <h2 class="card-title">FORMULIR PENDAFATARAN PESERTA DIDIK BARU</h2>    
        </div>  
    </div>  
</div>
    {!! Form::open(['url' => route('ppdb.daftar_siswa'),'method' => 'post', 'class'=>'form-horizontal']) !!}
        @include('_formppdb')
    {!! Form::close() !!}  
@endsection