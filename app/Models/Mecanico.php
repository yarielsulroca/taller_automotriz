<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mecanico
 * 
 * @property int $id
 * @property int|null $profecion
 * @property int $nombre
 * @property string|null $cargo
 * @property string|null $categoria
 * 
 * @property OperacionVehiculo $operacion_vehiculo
 *
 * @package App\Models
 */
class Mecanico extends Model
{
	protected $table = 'mecanicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'profecion' => 'int',
		'nombre' => 'int'
	];

	protected $fillable = [
		'id',
		'profecion',
		'nombre',
		'cargo',
		'categoria'
	];

	public function operacion_vehiculo()
	{
		return $this->hasOne(OperacionVehiculo::class, 'mecanico', 'id');
	}
}
