<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Exam;
class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description',
    ];
}
