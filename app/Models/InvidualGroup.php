<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvidualGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'invidual_groups';
    protected $fillable  = ['id', 'individual_id', 'group_id'];

    public function individual(){
        return $this->belongsTo(Individual::class);
    }
}
