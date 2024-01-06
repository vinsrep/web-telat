<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombels extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'rombel',
    ];

    public function rombels(){
        return $this->hasMany(Students::class,'id', 'rombels_id');
    }
}
