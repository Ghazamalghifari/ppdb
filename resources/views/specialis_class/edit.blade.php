@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }} ">Home</a></li>
					<li><a href="{{ url('/admin/specialis_class') }}">Specialis Class</a></li>
					<li class="active">Edit ( {{ $specialis_class->nama_class }} )</li>
				</ul>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Edit ( {{ $specialis_class->nama_class }} )</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($specialis_class, ['url' => route('specialis_class.update', $specialis_class->id), 'method' => 'put', 'files'=>'true','class'=>'form-horizontal']) !!}
							
						<textarea id="konten" class="form-control" name="isi_class" rows="50" cols="50">
							@if (isset($specialis_class) && $specialis_class->isi_class)
								{{ $specialis_class->isi_class }}
							@endif
						</textarea>  

						<div class="form-group"> <br>
								{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!} 
						</div>


						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection