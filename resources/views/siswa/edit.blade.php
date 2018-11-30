@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }} ">Home</a></li>
					<li><a href="{{ url('/admin/siswa') }}">Siswa</a></li>
					<li class="active">Edit Siswa</li>
				</ul>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Edit Siswa</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($siswa, ['url' => route('siswa.update', $siswa->id), 'method' => 'put', 'files'=>'true','class'=>'form-horizontal']) !!}
						@include('siswa._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection