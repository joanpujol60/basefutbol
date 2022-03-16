<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partit
 *
 * @property $id
 * @property $jornada
 * @property $categoria
 * @property $local
 * @property $resultat_local
 * @property $visitant
 * @property $resultat_visitant
 * @property $created_at
 * @property $updated_at
 *
 * @property Clubv $clubv
 * @property Clubl $clubl
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partit extends Model
{
    
    static $rules = [
		'jornada' => 'required',
		'categoria' => 'required',
		'local' => 'required',
		'resultat_local' => 'required',
		'visitant' => 'required',
		'resultat_visitant' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jornada','categoria','local','resultat_local','visitant','resultat_visitant'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clubv()
    {
        return $this->hasOne('App\Club', 'id', 'visitant');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clubl()
    {
        return $this->hasOne('App\Club', 'id', 'local');
    }
    

}
