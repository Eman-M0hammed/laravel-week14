<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ["title", "description", "comment", "user_id"];
    protected $guarded = [];

    // protected $table = "posts";
}
