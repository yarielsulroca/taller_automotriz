<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreasTaller
 * 
 * @property int $id
 * @property int $tayer
 * @property string $nomber
 * @property string|null $descripcion
 * 
 * @property Taller $taller
 * @property OperacionVehiculo $operacion_vehiculo
 *
 * @package App\Models
 */
class AreasTaller extends Model
{
	protected $table = 'areas_taller';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'taller' => 'int'
	];

	protected $fillable = [
		'id',
		'taller',
		'nomber',
		'descripcion'
	];

	public function taller()
	{
		return $this->belongsTo(Taller::class, 'taller', 'id');
	}

	public function operacion_vehiculo()
	{
		return $this->hasMany(OperacionVehiculo::class, 'id_area', 'id');
	}
}
