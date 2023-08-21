@extends('layouts.portalApp')
@section('about')
  <section class="section-gap info-area" id="about">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Why Choose Us For Virtual Tour Experience</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>
      <div class="single-info row mt-40">
        <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
          <div class="info-thumb">
            <img src="img/logo.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 no-padding info-rigth">
          <div class="info-content">
            <h2 class="pb-30">Virtual Tour<br>
            Experience<br>
            Untuk Wisata Jawa Tengah</h2>
            <p>
              Website ini merupakan sebuah proyek tugas akhir berupa program virtual tour.
            </p>
            <br>
            <p>
              Data yang didapatkan langsung dari beberapa tempat yang diobservasi oleh peneliti di sekitar jawa tengah bagian barat.
            </p>
            <br>
            <p>
              Dikerjakan oleh Mahasiswa Udinus 2019
            </p>
            </div>
        </div>
      </div>
    </div>
  </section>
	@endsection
@section('project')
	<section class="project-area section-gap" id="project">
	  <div class="container">
	    <div class="row d-flex justify-content-center">
	      <div class="menu-content pb-30 col-lg-8">
	        <div class="title text-center">
	          <h1 class="mb-10">Latest Category Tour</h1>
	          <p>Beberapa Kategori Tempat Destinasi Wisata yang telah terobservasi <br> untuk kedepannya akan bertambah.</p>
	        </div>
	      </div>
	    </div>
	    <div class="row justify-content-center d-flex">
	      <div class="active-works-carousel mt-40 col-lg-8">
	        @foreach ($data['category'] as $slider)
	        <div class="item">
	          <img class="img-fluid" src="{{ url($slider->image) }}" height="250" width="300" alt="">
	          <div class="caption text-center mt-20">
	            <h6 class="text-uppercase">{{$slider->name}}</h6>
	            <p>{{$slider->information}}</p>
	          </div>
						<center>
						<a class="btn" href="{{url('category/'.$slider->id)}}"><b>Click Me</b></a>
					</center>
	        </div>
	          @endforeach
	      </div>
	    </div>
	  </div>
	</section>
@endsection
@section('gallery')
	<section class="gallery-area" id="gallery">
    <div class="title text-center">
      <h1 class="mb-10">Galley Virtual Tour Experience</h1>
      <p>360° all around virtual images.</p>
    </div>
		<div class="container-fluid">
			<div class="row no-padding">
				<div class="active-gallery">
          @foreach ($data['wisata'] as $ws)
					<div class="item single-gallery">
						<img src="{{ url($ws->image_wisata) }}" alt="">
					</div>
          			@endforeach
				</div>
			</div>
		</div>
	</section>
      <!-- End gallery Area -->
      <section class="logo-area">
        <div class="container">
          <div class="row">

          </div>
        </div>
      </section>
      <!-- End logo Area -->
@endsection
