<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Club
 *
 * @property $id
 * @property $club
 * @property $ciutat
 * @property $created_at
 * @property $updated_at
 *
 * @property Partit[] $partitsl
 * @property Partit[] $partitsv
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Club extends Model
{
    
    static $rules = [
		'club' => 'required',
		'ciutat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['club','ciutat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partitsv()
    {
        return $this->hasMany('App\Partit', 'visitant', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partitsl()
    {
        return $this->hasMany('App\Partit', 'local', 'id');
    }
    

}
