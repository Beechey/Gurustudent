<?php

namespace Gurustudent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Gurustudent\Models\Permission;

class Role extends Model
{
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public function permissions()
    {
    	// return $this->belongsToMany('Gurustudent\Models\Permission');
        return $this->belongsToMany(Permission::class);

    }

    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}
