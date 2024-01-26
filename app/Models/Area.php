<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $idArea
 * @property $descripcion
 * @property $idUsuario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'idArea' => 'required',
		'descripcion' => 'required',
		'idUsuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idArea','descripcion','idUsuario'];



}
