<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateForm extends Model
{
    use HasFactory;
    protected $table = 'candidates';
    protected $fillable = ['name','c_img', 'information', 'votes', 'created_at', 'updated_at'];
}
