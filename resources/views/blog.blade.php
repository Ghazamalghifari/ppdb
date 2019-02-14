  @extends('layouts.app_blog')

  @section('content')
  <div class="card card-nav-tabs"> 
    <h2 class="title"><center>Seputar Sekolah :</center></h2> 
</div>

<div class="row">
	<div class="col-sm-9">
		<div class="card card-nav-tabs">
		  <div class="card-header card-header-success">
		    Artikel :
		  </div>
		  <div class="card-body">
		    
			<!-- Isi artikel  -->
			@foreach($datablog->get() as $datablogs)
               <div class="card">
              <div class="card-body">
                <div class="row">
                <div class="col-sm-4">
                    <img class="card-img-top" src="gambar_artikel/{{ $datablogs->gambar_artikel }}" alt="Card image cap">
                </div>
                <div class="col-sm-6"> 
                    <h4 class="card-title">{{ substr($datablogs->judul_artikel,0,60) }}</h4>
                    <p class="card-text">{{ $datablogs->isi_artikel }}</p>   
                </div>
                <div class="col-sm-2"><br>
                    <a href="#0" class="btn btn-success btn-lg">baca</a>
                </div>
                    
                </div>
              </div>
            </div>
            @endforeach

		  </div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="card card-nav-tabs">
		  <div class="card-header card-header-success">
		    Kategori :
		  </div>
		  <div class="card-body">
		    <h4 class="card-title">Special title treatment</h4>
		    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		    <a href="#0" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
  @endsection