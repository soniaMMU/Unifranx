<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $lugares_id
 * @property $dia_ho
 * @property $h_in
 * @property $h_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugare $lugare
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['lugares_id', 'dia_ho', 'h_in', 'h_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lugare()
    {
        return $this->belongsTo(\App\Models\Lugare::class, 'lugares_id', 'id');
    }
    
}
