<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['user_id', 'date', 'done', 'future'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
