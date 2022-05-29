<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'sucursales';
    public $timestamps = false;

    public function tostaduria(){
        return $this->belongsTo(Tostaduria::class);
    }

    public function ciudad(){
        return $this->belongsTo(Ciudad::class, 'ciudad_cp', 'cod_postal');
    }
}
