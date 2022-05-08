<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tostaduria extends Model
{
    use HasFactory;
    protected $table = 'tostadurias';
    public $timestamps = false;

    public function sucursales(){
        return $this->hasMany(Sucursal::class);
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search'])){
            $query->where('nombre', 'ilike', '%'.$filters['search'].'%');
        }

        if(isset($filters['presente-en'])){
             $query->whereHas('sucursales', function (Builder $query) use($filters){
                 $query->whereHas('ciudad', function (Builder $query) use($filters){
                    $query->where('nombre', 'ilike', $filters['presente-en']);
                 });
            });
        }
    }
}
