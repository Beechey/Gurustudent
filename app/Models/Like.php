<?php

namespace Gurustudent\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model 
{
	protected $table = 'likeable';

	public function likeable()
	{
		return $thi->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('Gurustudent\Models\User', 'user_id');
	}
}