<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSoccer extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function matchResults()
    {
        return $this->hasMany(MatchResult::class, 'match_id', 'id');
    }
}
