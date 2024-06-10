<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participante
 *
 * @property $id
 * @property $roles_id
 * @property $nom_p
 * @property $app_p
 * @property $apm_p
 * @property $ci_p
 * @property $c1_p
 * @property $c2_p
 * @property $corr_p
 * @property $carr_p
 * @property $org_p
 * @property $est_p
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @property Asistencia[] $asistencias
 * @property Inscripcione[] $inscripciones
 * @property Recomendacione[] $recomendaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['roles_id', 'nom_p', 'app_p', 'apm_p', 'ci_p', 'c1_p', 'c2_p', 'corr_p', 'carr_p', 'org_p', 'est_p'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'roles_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany(\App\Models\Asistencia::class, 'id', 'participantes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciones()
    {
        return $this->hasMany(\App\Models\Inscripcione::class, 'id', 'participantes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recomendaciones()
    {
        return $this->hasMany(\App\Models\Recomendacione::class, 'id', 'participantes_id');
    }
    
}
