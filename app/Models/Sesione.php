<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sesione
 *
 * @property $id
 * @property $eventos_id
 * @property $t_s
 * @property $cant_s
 * @property $st_s
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @property Asistencia[] $asistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sesione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['eventos_id', 't_s', 'cant_s', 'st_s'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'eventos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany(\App\Models\Asistencia::class, 'id', 'sesiones_id');
    }
    
}
