<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'post_id' ,
        'photo' ,
        'author' ,
        'email' ,
        'body' ,
        'is_active' ,
    ];

    public function replies ()
    {
        return $this->hasMany(CommentReply::class);
    }

    public function post ()
    {
        return $this->belongsTo(Post::class);
    }
}
