<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    protected $fillable = [
        'category_id' ,
        'photo_id' ,
        'title' ,
        'body' ,
        'slug',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function photo ()
    {
        return $this->belongsTo(Photo::class);
    }

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }

    public function sluggable ()
    : array
    {
        return [
            'slug' => [
                'source' => 'title' ,
            ] ,
        ];
    }
}
