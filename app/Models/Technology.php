<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Technology
 *
 * @property $id
 * @property $Version
 * @property $idUsuario
 * @property $idCourse
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Technology extends Model
{
    
    static $rules = [
		'Version' => 'required',
		'idUsuario' => 'required',
		'idCourse' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Version','idUsuario','idCourse'];



}
