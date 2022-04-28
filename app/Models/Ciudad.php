<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';
    protected $primaryKey = 'cod_postal';
    public $incrementing = false;
    public $timestamps = false;

    public function sucursales(){
        return $this->hasMany(Sucursal::class, 'ciudad_cp', 'cod_postal');
    }
}
