<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'individuals';
    protected $fillable  = ['id', 'rank_id', 'competition_type_id', 'tournament_id'];

    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }

    public function invidualGroups() {
        return $this->hasMany(InvidualGroup::class, 'individual_id', 'id');
    }
}
