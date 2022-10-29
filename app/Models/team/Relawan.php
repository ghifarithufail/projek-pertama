<?php

namespace App\Models\team;

use App\Models\inventaris\Kelurahan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_ad'];

    public function kelurahans(){
        return $this->belongsTo(Kelurahan::class,'kelurahan_id','id');
    }
}
