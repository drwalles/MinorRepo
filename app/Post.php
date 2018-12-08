<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'slug',
        'draft',
        'thread_id',
        'user_id',
        'date',
        'post',
    ];

    public function thread()
    {
        return $this->belongsTo('App\Thread', 'thread_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
