<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
      'name',
      'image',
      'information'
    ];

        public static $rules = [
            'name' => 'required',
            'image' => 'required',
            'information' => 'required',
        ];

    public function wisata(){
    	return $this->hasMany(Wisata::class);
    }


}
