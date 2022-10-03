<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = "beritas";

    public function kategori()
    {
    	return $this->belongsTo('App\Models\Kategori');
    }
    public function jnsbrta()
    {
    	return $this->belongsTo('App\Models\jnsbrta');
    }
}
