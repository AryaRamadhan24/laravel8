<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejalas extends Model
{
    use HasFactory;
    protected $table = 'gejalas';
    protected $guarded = ['id_gejala'];
}
