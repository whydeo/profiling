<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = "kategoris";

    public function berita()
    {
    	return $this->belongsTo('App\Models\berita');
        return $this->hasMany(berita::class);
    }    
   


}
