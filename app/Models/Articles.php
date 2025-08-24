<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{
    use SoftDeletes;
    protected $table ='articles';
    protected $fillable = [
        'img_path', 'title', 'date', 'content', 'is_published'
    ];
}
