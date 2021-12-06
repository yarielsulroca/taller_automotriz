<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosVehiculo
 * 
 * @property int $id
 * @property string $estado
 * @property string|null $descipcion
 * 
 * @property Collection|Vehiculo[] $vehiculos
 *
 * @package App\Models
 */
class EstadosVehiculo extends Model
{
	protected $table = 'estados_vehiculo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'estado',
		'descipcion'
	];

	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class, 'estado_vehiculo', 'id');
	}
}
