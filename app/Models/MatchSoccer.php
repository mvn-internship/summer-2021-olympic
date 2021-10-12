<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSoccer extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function rank()
    {
        return $this->belongsTo(Rank::class, 'rank_id', 'id');
    }
    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'tournament_id', 'id');
    }
    public function Group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
}
