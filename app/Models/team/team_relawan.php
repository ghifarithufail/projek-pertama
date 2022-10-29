<?php

namespace App\Models\team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team_relawan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];
}
