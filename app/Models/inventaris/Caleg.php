<?php

namespace App\Models\inventaris;

use App\Models\inventaris\Partai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caleg extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_ad'];

    public function partais(){
        return $this->belongsTo(Partai::class,'partai_id','id');
    }
}
