<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $table="posts";
    use HasFactory;
    protected $fillable=['title','posted_by'];
}
