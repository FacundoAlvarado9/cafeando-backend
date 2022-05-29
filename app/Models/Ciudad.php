<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_postal';
    protected $table = 'ciudades';
    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = false;

    public function sucursales(){
        return $this->hasMany(Sucursal::class, 'ciudad_cp', 'cod_postal');
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search'])){
            $query->where('nombre', 'ilike', '%'.$filters['search'].'%');
        }
    }
}
