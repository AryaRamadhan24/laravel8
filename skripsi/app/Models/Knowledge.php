<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;
    protected $table = "knowledges";
    protected $fillable = ['knowledge_code', 'total_bobot', 'total_similarity'];
}
