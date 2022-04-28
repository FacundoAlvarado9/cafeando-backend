<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variedad extends Model
{
    use HasFactory;

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
}
