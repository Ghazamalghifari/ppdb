@extends('layouts.app')
@section('content')
@if (session()->has('flash_notification.message'))
<div class="container">
<div class="alert alert-{{ session()->get('flash_notification.level') }}">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
{!! session()->get('flash_notification.message') !!}
</div>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li class="active">Siswa</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Siswa</h2>
</div>
<div class="panel-body">
<a class="btn btn-primary" href="{{ route('siswa.create') }}">Tambah</a> 
 

<br>
<br>

{!! $html->table(['class'=>'table-striped table']) !!}


</div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection
