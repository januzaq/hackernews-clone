<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable = [
    	'user_id',
    	'title',
    	'url',
    	'text',
    	'votes'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
