<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function pointRule(Type $var = null)
    {
        return $this->belongsTo(PointRule::class, 'point_rule_id', 'id');
    }
}
