<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMatch extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'match_id',
        'role_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function matchSoccer()
    {
        return $this->hasOne(MatchSoccer::class, 'id', 'match_id');
    }
    public function role()
    {   
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
