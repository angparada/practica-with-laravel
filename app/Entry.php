<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //

	//$entry->user
	// Entry N - 1 User
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
