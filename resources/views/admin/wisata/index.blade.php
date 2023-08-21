@extends('layouts.app')
@section('content')
    <h3>Wisata</h3>
    <hr>

    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <a href="{{ url('admin/wisata/create') }}" class="btn btn-md btn-primary mb-3"><i class="fas fa-plus"></i>Tambah Data</a>
    <table class="table table-bordered">
        <thead class="bg-primary text-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Category ID</th>
                <th>Information</th>
                <th>ContentVR</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $cat )
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->nama_wisata }}</td>
            <td><img src="{{ url($cat->image_wisata) }}" width="100px"></td>
            <td>{{ $cat->categories_id }}</td>
            <td>{{ $cat->informasi_wisata}}</td>
            <td><a href="{{ url('admin/contentvr/') }}" class="btn btn-primary btn-md"><i class="far fa"></i>View</a></td>
            <td>
                <a href="{{ url('admin/wisata/edit/'.$cat->id) }}" class="btn btn-primary btn-md"><i class="far fa-edit"></i>Edit</a>
                <a href="{{ url('admin/wisata/delete/'.$cat->id) }}" class="btn btn-danger btn-md"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>

        @endforeach
    </table>
@endsection
