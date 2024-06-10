<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recomendacione
 *
 * @property $id
 * @property $participantes_id
 * @property $desc_r
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante $participante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recomendacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['participantes_id', 'desc_r'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participante()
    {
        return $this->belongsTo(\App\Models\Participante::class, 'participantes_id', 'id');
    }
    
}
