<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message'
    ];

    /**
     * Get user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
