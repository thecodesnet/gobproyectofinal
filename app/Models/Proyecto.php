<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombreproyecto
 * @property $fuentefondo
 * @property $montoplanificado
 * @property $montopatrocinado
 * @property $montofondospropios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombreproyecto' => 'required',
		'fuentefondo' => 'required',
		'montoplanificado' => 'required',
		'montopatrocinado' => 'required',
		'montofondospropios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreproyecto','fuentefondo','montoplanificado','montopatrocinado','montofondospropios'];



}
