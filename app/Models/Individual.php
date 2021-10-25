<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
}
