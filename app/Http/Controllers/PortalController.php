<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Wisata;
use App\Models\ContentVr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PortalController extends Controller
{
    public function index(){
      $data['wisata']          = Wisata::get();
      $data['category']        = Category::get();
      $data['contentvr']        = ContentVr::get();
      return view('portal.index', compact('data'));
    }

    public function wisata($id){
        $data['wisata']             = Wisata::where('categories_id',$id)->latest()->get();
        $data['category']           = Category::get();
        $data['contentvr']          = ContentVr::where('wisata_id',$id)->get();
        $contentvr = ContentVr::find($id);
        $wisata               = Wisata::find($id);
        return view('portal.wisata', compact('data','wisata'));
    }

    public function category($id){
        $data['wisata']              = Wisata::where('categories_id',$id)->get();
        $category = Category::find($id);
        return view('portal.category', compact('data','category'));
    }

    public function contentvr($id){
        //$data['contentvr']  = ContentVr::where('wisata_id',$id)->get();
        $wisata = Wisata::find($id);
        if(!$wisata) abort(404);
        $data['contentvr'] = $wisata->contentvr;
        return view('portal.contentVr', compact('data','wisata'));
    }

}
