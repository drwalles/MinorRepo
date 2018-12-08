<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problems';
    protected $fillable = [
        'problem_name',
        'problem_description',
        'problem_setter',
        'total_solve',
        'total_submission',
        'problem_tag',
        'time_limit',
        'memory_limit',
        'sample_input',
        'sample_output',
        'tc_input',
        'tc_output',
    ];

    public function tag()
    {
        return $this->belongsTo('App\Tag','problem_tag');
    }
}
