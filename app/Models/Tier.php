<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tier extends Model
{
    use HasFactory;

    protected $table = "canal_tier";
    protected $fillable = ['nome', 'fk_tierlist'];

    
}