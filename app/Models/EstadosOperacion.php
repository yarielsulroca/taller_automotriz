<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosOperacion
 * 
 * @property int $id
 * @property int $tayer
 * @property string $estado
 * @property string|null $descripcion
 * @property int|null $inactivo
 * 
 * @property Taller $taller
 * @property OperacionVehiculo $operacion_vehiculo
 *
 * @package App\Models
 */
class EstadosOperacion extends Model
{
	protected $table = 'estados_operacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tayer' => 'int',
		'inactivo' => 'int'
	];

	protected $fillable = [
		'id',
		'tayer',
		'estado',
		'descripcion',
		'inactivo'
	];

	public function taller()
	{
		return $this->belongsTo(Taller::class, 'tayer', 'id');
	}

	public function operacion_vehiculo()
	{
		return $this->hasOne(OperacionVehiculo::class, 'estado_operacion', 'id');
	}
}
