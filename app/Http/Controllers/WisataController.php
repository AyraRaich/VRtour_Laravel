<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Wisata;
use App\Models\ContentVr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class WisataController extends Controller
{
  public function index(){
      $data = Wisata::all();
      return view('admin.wisata.index', compact('data'));
  }

  public function create(){
      $category = Category::get();
      return view('admin.wisata.create', compact('category'));
  }

  public function insert(Request $request){
      $request->validate(Wisata::$rules);
      $requests = $request->all();

      $requests['image_wisata'] = "";
      $files = Str::random(20)."-". $request->image_wisata->getClientOriginalName();
      $request->file('image_wisata')->move("file/wisata/", $files);
      $requests['image_wisata'] = "file/wisata/" . $files;

      $new_wisata = Wisata::create($requests);
      foreach($request->file('filename')as $image){
              $imageName =$requests['nama_wisata'].'-image-'.time().rand(1,1000).'.'.$image->extension();
              $image->move(public_path().'/file/contentvr', $imageName);
              ContentVr::create([
                'wisata_id'=>$new_wisata->id,
                'filename'=>$imageName
              ]);
            }
  if($new_wisata){
      return redirect('admin/wisata')->with('status', 'Berhasil menambah data!');
  }

  return redirect('admin/wisata')->with('status', 'Gagal menambah data!');
}

  public function edit($id){
      $data = Wisata::find($id);
      $category = Category::get();
      $contentvr = ContentVr::get();
      return view('admin.wisata.edit', compact('data','category','contentvr'));

  }

  public function update(Request $request, $id){
      $d = Wisata::find($id);
      $b = ContentVr::find($id);
      if($d == null){
          return redirect('admin/wisata')->with('status', 'Data tidak ditemukan!');

      }
      $req = $request->all();

        if($request->hasFile('image_wisata')){
            if($d->image !== null){
                File::delete("$d->image");
            }
      $files = Str::random(20)."-". $request->image_wisata->getClientOriginalName();
      $request->file('image_wisata')->move("file/wisata/", $files);
      $req['image_wisata'] = "file/wisata/" . $files;

          foreach($request->file('filename')as $image){
                  $imageName =$req['nama_wisata'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                  $image->move(public_path().'/file/contentvr', $imageName);
                  ContentVr::create([
                    'wisata_id'=>$d->id,
                    'filename'=>$imageName
                  ]);
                }
          $data = Wisata::find($id)->update($req);
          if($data){
              return redirect('admin/wisata')->with('status', 'Wisata berhasil diedit!');
          }
          return redirect('admin/wisata')->with('status', 'Gagal edit wisata!');
      }
}

  public function delete($id){
      $data = Wisata::find($id);
      if($data == null){
          return redirect('admin/wisata')->with('status', 'Data tidak ditemukan!');

      }

      if($data->image_wisata !== null || $data->image_wisata !== ""){
          File::delete("$data->image_wisata");
      }

      $delete = $data->delete();
      if($delete){
          return redirect('admin/wisata')->with('status', 'Berhasil Hapus Category!');
      }
      return redirect('admin/wisata')->with('status', 'Gagal Hapus Category');

  }

  public function view($id){
    $wisata = wisata::find($id);
        if(!$wisata) abort(404);
        $filename = $wisata->contentvr;
        return view('viewvr',compact('wisata','filename'));
  }
}
