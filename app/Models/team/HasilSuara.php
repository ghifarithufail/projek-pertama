<?php

namespace App\Models\team;

use App\Models\inventaris\Caleg;
use App\Models\team\koord_team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSuara extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_ad'];

    public function koord_teams(){
        return $this->belongsTo(koord_team::class,'codeteam_id','id');
    }

    public function calegs(){
        return $this->belongsTo(Caleg::class,'calon_id','id');
    }
}
