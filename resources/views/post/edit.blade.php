@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }} ">Home</a></li>
					<li><a href="{{ url('/admin/post') }}">Artikel</a></li>
					<li class="active">Edit Artikel</li>
				</ul>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Edit Artikel</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($post, ['url' => route('post.update', $post->id), 'method' => 'put', 'files'=>'true','class'=>'form-horizontal']) !!}
						@include('post._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection