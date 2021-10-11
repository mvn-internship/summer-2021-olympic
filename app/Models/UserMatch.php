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
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function matchSoccer()
    {
        return $this->belongsTo(MatchSoccer::class, 'match_id', 'id');
    }
    public function role()
    {   
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
