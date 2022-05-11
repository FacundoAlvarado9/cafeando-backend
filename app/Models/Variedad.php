<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Variedad extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    const CREATED_AT = 'published_at';

    protected $table = 'variedades';

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function tostaduria(){
        return $this->belongsTo(Tostaduria::class);
    }

    public function origenes(){
        return $this->belongsToMany(Origen::class, 'variedad_origen');
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search'])){
            $query->where('nombre', 'ilike', '%'.$filters['search'].'%');
        }

        if(isset($filters['tipo'])){
            //$query->where('nombre', 'ilike', '%topazio%');
             $query->whereHas('tipo', function (Builder $query) use($filters){
                $query->where('nombre', 'ilike', $filters['tipo']);
            });
        }

        if(isset($filters['origen'])){
            //$query->where('nombre', 'ilike', '%topazio%');
             $query->whereHas('origenes', function (Builder $query) use($filters){
                $query->where('nombre', 'ilike', $filters['origen']);
            });
        }

        if(isset($filters['tostaduria'])){
            //$query->where('nombre', 'ilike', '%topazio%');
             $query->whereHas('tostaduria', function (Builder $query) use($filters){
                $query->where('nombre', 'ilike', $filters['tostaduria']);
            });
        }
    }
}
