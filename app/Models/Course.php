<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [ 
      'category', 'title', 'content', 'writer', 'published_at', 'image'
    ];
    protected $casts = [
        'published_at'=> 'datetime',
    ];
}
