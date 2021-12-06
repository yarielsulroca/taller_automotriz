<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $id
 * @property int $estado_vehiculo
 * @property int|null $color
 * @property string|null $anno
 * @property string $matricula
 * @property string $combustion
 * @property string|null $empresa
 * @property string|null $modelo
 * @property Carbon|null $fecha_entrada
 * @property Carbon|null $fecha_salida
 * @property boolean|null $img_entrada
 * @property boolean|null $img_salida
 * 
 * @property EstadosVehiculo $estados_vehiculo
 * @property OperacionVehiculo $operacion_vehiculo
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculos';
	protected $primaryKey = 'matricula';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'estado_vehiculo' => 'int',
		'color' => 'int',
		'img_entrada' => 'boolean',
		'img_salida' => 'boolean'
	];

	protected $dates = [
		'fecha_entrada',
		'fecha_salida'
	];

	protected $fillable = [
		'id',
		'estado_vehiculo',
		'color',
		'anno',
		'combustion',
		'empresa',
		'modelo',
		'fecha_entrada',
		'fecha_salida',
		'img_entrada',
		'img_salida'
	];

	public function estados_vehiculo()
	{
		return $this->belongsTo(EstadosVehiculo::class, 'estado_vehiculo', 'id');
	}

	public function operacion_vehiculo()
	{
		return $this->hasOne(OperacionVehiculo::class, 'vehiculo', 'id');
	}
}
