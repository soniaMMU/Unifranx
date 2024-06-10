<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencia
 *
 * @property $id
 * @property $sesiones_id
 * @property $participantes_id
 * @property $fh_asis
 * @property $st_asis
 * @property $asistencia_confirmada
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante $participante
 * @property Sesione $sesione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['sesiones_id', 'participantes_id', 'fh_asis', 'st_asis', 'asistencia_confirmada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participante()
    {
        return $this->belongsTo(\App\Models\Participante::class, 'participantes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sesione()
    {
        return $this->belongsTo(\App\Models\Sesione::class, 'sesiones_id', 'id');
    }
    
}
