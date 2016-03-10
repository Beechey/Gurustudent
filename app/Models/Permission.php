<?php

namespace Gurustudent\Models;

use Illuminate\Database\Eloquent\Model;
use Gurustudent\Models\Role;

class Permission extends Model
{
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
}
