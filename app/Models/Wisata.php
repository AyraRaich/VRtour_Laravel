<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = [
            'nama_wisata',
            'image_wisata',
            'informasi_wisata',
            'categories_id',
            'address',
        ];

        public static $rules = [
            'nama_wisata' => 'required',
            'image_wisata' => 'required',
            'informasi_wisata' => 'required',
            'categories_id' => 'required',
            'address' => 'required',
        ];

        public function categories(){
        	return $this->belongsTo(Category::class);
        }

        public function contentvr(){
        	return $this->hasMany(ContentVr::class);
        }
}
