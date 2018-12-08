<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    protected $fillable = [
        'user_id',
        'forum_open',
        'title',
        'date'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
