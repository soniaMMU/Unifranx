<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugare
 *
 * @property $id
 * @property $eventos_id
 * @property $nom_lu
 * @property $bl_lu
 * @property $cap_lu
 * @property $est_lu
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugare extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['eventos_id', 'nom_lu', 'bl_lu', 'cap_lu', 'est_lu'];


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
    public function horarios()
    {
        return $this->hasMany(\App\Models\Horario::class, 'id', 'lugares_id');
    }
    
}
