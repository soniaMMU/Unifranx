<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $tip_ev
 * @property $f_in_ev
 * @property $nom_ev
 * @property $sed_ev
 * @property $f_fi_ev
 * @property $st_ev
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscripcione[] $inscripciones
 * @property Lugare[] $lugares
 * @property Sesione[] $sesiones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tip_ev', 'f_in_ev', 'nom_ev', 'sed_ev', 'f_fi_ev', 'st_ev', 'image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciones()
    {
        return $this->hasMany(\App\Models\Inscripcione::class, 'id', 'eventos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugares()
    {
        return $this->hasMany(\App\Models\Lugare::class, 'id', 'eventos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sesiones()
    {
        return $this->hasMany(\App\Models\Sesione::class, 'id', 'eventos_id');
    }
    
}
