<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submissions';
    protected $fillable = [
        'submission_time',
        'user_id',
        'code',
        'problem_id',
        'verdict',
        'cpu',
        'memory',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function problem()
    {
        return $this->belongsTo('App\Problem','problem_id');
    }
}
