<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'origenes';
    public $timestamps = false;

    public function variedades(){
        return $this->belongsToMany(Variedad::class, 'variedad_origen');
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search'])){
            $query->where('nombre', 'ilike', '%'.$filters['search'].'%')
                      ->orWhere('descripcion', 'ilike', '%'.$filters['search'].'%');
        }
    }
}
