<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;
    protected $table = 'solusi';
    protected $fillable = ['penyakit_id', 'deskripsi_solusi'];
}
