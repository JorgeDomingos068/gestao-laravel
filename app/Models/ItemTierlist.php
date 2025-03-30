<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tier extends Model
{
    use HasFactory;

    protected $table = "canal_item_tierlist";
    protected $fillable = ['nome', 'fk_tier'];

    
}