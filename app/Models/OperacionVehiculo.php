<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OperacionVehiculo
 * 
 * @property int $id
 * @property int|null $img_operacion
 * @property int $id_area
 * @property int $vehiculo
 * @property int $estado_operacion
 * @property int $mecanico
 * @property string|null $operacion
 * @property string|null $descripcion
 * @property Carbon $fecha_inicio
 * @property Carbon|null $fecha_terminado
 * 
 * @property AreasTaller $areas_operacion
 * @property EstadosOperacion $estados_operacion
 *
 * @package App\Models
 */
class OperacionVehiculo extends Model
{
	protected $table = 'operacion_vehiculo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'img_operacion' => 'int',
		'id_area' => 'int',
		'vehiculo' => 'int',
		'estado_operacion' => 'int',
		'mecanico' => 'int'
	];

	protected $dates = [
		'fecha_inicio',
		'fecha_terminado'
	];

	protected $fillable = [
		'id',
		'img_operacion',
		'id_area',
		'vehiculo',
		'estado_operacion',
		'mecanico',
		'operacion',
		'descripcion',
		'fecha_inicio',
		'fecha_terminado'
	];

	public function areas_operacion()
	{
		return $this->belongsTo(AreasTaller::class, 'id_area', 'id');
	}

	public function estados_operacion()
	{
		return $this->belongsTo(EstadosOperacion::class, 'estado_operacion', 'id');
	}

	public function img_operacion()
	{
		return $this->belongsTo(ImgOperacion::class, 'img_operacion', 'id');
	}

	public function mecanico()
	{
		return $this->belongsTo(Mecanico::class, 'mecanico', 'id');
	}

	public function vehiculo()
	{
		return $this->belongsTo(Vehiculo::class, 'vehiculo', 'id');
	}
}
