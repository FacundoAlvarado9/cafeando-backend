<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tostaduria extends Model
{
    use HasFactory;
    protected $table = 'tostadurias';
    public $timestamps = false;

    public function sucursales(){
        return $this->hasMany(Sucursales::class);
    }
}
