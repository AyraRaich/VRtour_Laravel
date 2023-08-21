@extends('layouts.app')
@section('content')

    <h3>VR</h3>
    <hr>

    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <a href="{{ url('admin/wisata/') }}" class="btn btn-md btn-primary mb-3"><i class="fas fa-plus"></i>Back</a>
    <table class="table table-bordered">
        <thead class="bg-primary text-light">
            <tr>
                <th>Wisata ID</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $cat )
        <tr>
            <td>{{ $cat->wisata_id }}</td>
            <td><img src="{{ asset('/file/contentvr/'.$cat->filename) }}" width="350px"></td>
            <td>
                <a href="{{ url('admin/contentvr/delete/'.$cat->id) }}" class="btn btn-danger btn-md"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>

        @endforeach
    </table>
@endsection
