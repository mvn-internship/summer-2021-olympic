<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisson extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'display_name',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissons');
    }

    public function role_permissions()
    {
        return $this->hasMany(RolePermisson::class, 'permisson_id', 'id');
    }
}
