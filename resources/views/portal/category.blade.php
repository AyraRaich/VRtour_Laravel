@extends('layouts.portalApp')
@section('home')
<section class="banner-area" id="home">
  <!-- Start Header Area -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
          <a class="navbar-brand" href="#home">
            <img src="/img/logo.png" alt="" width='79' height='33'>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-white lnr lnr-menu"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ url('/login') }}" >Login</a></li>
            </ul>
          </div>
      </div>
    </nav>
@endsection
@section('content')
	<h2>Category For : <span class="text-primary">{{$category->name}}</span> </h2>
	  <div class="row mt-4">
	    @foreach ($data['wisata'] as $ws)
	        <div class="col-md-3">
	          <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
	            <div class="card-body">
	              <img src="{{ url($ws->image_wisata) }}" alt=""class="card-img-top">
	            </div>
							<center><a href="{{url('wisata/'.$ws->id)}}"><p>{{$ws->nama_wisata}}</p></a></center>
	          </div>
	        </div>
	    @endforeach
	  </div>
	@endsection
