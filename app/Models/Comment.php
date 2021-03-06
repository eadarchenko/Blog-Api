<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Article;

class Comment extends Model
{
    protected $fillable = [
        'id','text'
      ];


    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
