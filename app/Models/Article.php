<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author_id'
    ];

    // Define relationship with author model
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
