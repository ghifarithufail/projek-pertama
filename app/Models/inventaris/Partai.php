<?php

namespace App\Models\inventaris;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partai extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];
}
