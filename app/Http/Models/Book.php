<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model{
    use SoftDeletes;

    // protected $table = 'books';
    protected $fillable = [
        "id_category","title", "description", "author"
    ];

    protected $guarded = ['id'];
}