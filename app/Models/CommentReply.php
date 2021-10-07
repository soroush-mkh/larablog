<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommentReply extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'comment_id' ,
        'author' ,
        'photo' ,
        'email' ,
        'body' ,
        'is_active' ,
    ];

    public function comment ()
    {
        return $this->belongsTo(Comment::class);
    }

}
