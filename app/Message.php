<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = [
        'user_id',
        'author',
        'recipient',
        'message',
        'message_date'
    ];

    public function user()
    {
        return $this->belongsTo('App\Message', 'user_id');
    }

}
