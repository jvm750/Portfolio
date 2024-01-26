<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $idCourse
 * @property $nameCourse
 * @property $descripcion
 * @property $idUsuario
 * @property $idTech
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    static $rules = [
		'idCourse' => 'required',
		'nameCourse' => 'required',
		'descripcion' => 'required',
		'idUsuario' => 'required',
		'idTech' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCourse','nameCourse','descripcion','idUsuario','idTech'];



}
