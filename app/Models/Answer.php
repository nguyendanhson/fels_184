<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'answers';
    protected $fillable = [
        'word_id',
        'content',
        'is_correct'
    ];

    public function word()
    {
        return $this->belongsTo('App\Models\Word');
    }
}
