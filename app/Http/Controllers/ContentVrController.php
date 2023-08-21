<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentVr;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ContentVrController extends Controller
{
  public function index(){
      $data = ContentVr::all();
      return view('admin.contentvr.index', compact('data'));
  }

  public function create(){
      return view('admin.contentvr.create');
  }


  public function edit($id){
      $data = contentvr::find($id);
      return view('admin.contentvr.edit', compact('data'));

  }

  public function update(Request $request, $id){
      $d = contentvr::find($id);
      if($d == null){
          return redirect('admin/contentvr')->with('status', 'Data tidak ditemukan!');

      }

      $req = $request->all();

      if($request->hasFile('filename')){
          if($d->filename !== null){
              File::delete("$d->filename");
          }
          foreach($request->file('filename')as $image){
                  $imageName =$req['nama_wisata'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                  $image->move(public_path().'/file/contentvr', $imageName);
                  ContentVr::create([
                    'wisata_id'=>$d->id,
                    'filename'=>$imageName
                  ]);
                }
          $data = contentvr::find($id)->update($req);
          if($data){
              return redirect('admin/contentvr')->with('status', 'contentvr berhasil diedit!');
          }
          return redirect('admin/contentvr')->with('status', 'Gagal edit contentvr!');
      }
  }

  public function delete($id){
      $data = contentvr::find($id);
      if($data == null){
          return redirect('admin/contentvr')->with('status', 'Data tidak ditemukan!');

      }

      if($data->filename !== null || $data->filename !== ""){
          File::delete("$data->filename");
      }

      $delete = $data->delete();
      if($delete){
          return redirect('admin/contentvr')->with('status', 'Berhasil Hapus contentvr!');
      }
      return redirect('admin/contentvr')->with('status', 'Gagal Hapus contentvr');

  }
}
