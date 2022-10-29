<?php

namespace App\Models\team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koord_team extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];
}
