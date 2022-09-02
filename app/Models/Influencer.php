<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;
    protected $table = "influencers";

    public function katinflu()
    {
    	return $this->belongsTo('App\Models\katinflu');
    }
}
