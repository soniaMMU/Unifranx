<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcione
 *
 * @property $id
 * @property $participantes_id
 * @property $eventos_id
 * @property $st_ev
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @property Participante $participante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['participantes_id', 'eventos_id', 'st_ev'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'eventos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participante()
    {
        return $this->belongsTo(\App\Models\Participante::class, 'participantes_id', 'id');
    }
    
}
