<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeDetail extends Model
{
    use HasFactory;
    protected $table = 'knowledge_details';
    protected $fillable = ['knowledge_id', 'atribut_id', 'gejala_id'];
}
