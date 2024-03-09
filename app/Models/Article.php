<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'article_authors');
    }
}
