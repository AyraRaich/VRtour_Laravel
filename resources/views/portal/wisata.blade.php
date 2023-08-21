@extends('layouts.portalApp')
@section('content')
<div class="container">
    <h3 class="mb-30">{{$wisata->nama_wisata}}</h3>
    <center>
<iframe width="800" height="600" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q={{$wisata->address}}&output=embed"></iframe>
          <br>
            {{$wisata->informasi_wisata}}<br>
          <a class="btn" href="{{url('contentVr/'.$wisata->id)}}"><b>Virtual {{$wisata->nama_wisata}} Gallery</b></a>
    </center>
</div>
@endsection
