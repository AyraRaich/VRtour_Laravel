@extends('layouts.app')
@section('content')
    <h3>Edit Wisata</h3>
    <hr>
    <div class="col-lg-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('admin/wisata/edit/'. $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="nama_wisata" value="{{ $data->nama_wisata}}" class="form-control"><br>
            <label for="thumnail">Thumbnail</label>
            <input type="file" name="image_wisata" class="form-control"><br>
            <label for="name">Address</label>
            <input type="textarea" name="address" value="{{ $data->address}}" class="form-control"><br>
            <label for="category">Category</label>
            <select name="categories_id" id="category" class="form-control">
                <option value="">Pilih Category</option>
                @foreach ($category as $cat1)
                    <option value="{{ $cat1->id }}" {{ ($cat1->id == $data->categories_id) ? 'selected' : '' }}>{{ $cat1->name }}</option>
                @endforeach
            </select><br>
            <label for="image">Image VR</label>
            <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control" accept="image/*" multiple>
          </div><br>
            <textarea name="informasi_wisata" id="informasi_wisata" cols="50" rows="10" class="form-control"></textarea><br>
            <script src="{{ url('assets/ckeditor/ckeditor.js') }}"></script>
            <script>
                var content = document.getElementById("infomasi_wisata");
                CKEDITOR.replace(informasi_wisata,{
                    language:'en-gb',
                    forcePasteAsPlainText: true,
                    autoParagraph: false,
                });
                CKEDITOR.config.allowedContent = true;
            </script><br>
            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
            <a href="{{ url('admin/wisata') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left"> Kembali</i></a>
        </form>
    </div>
@endsection
