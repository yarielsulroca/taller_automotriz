<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImgOperacion
 * 
 * @property int $id
 * @property int $img1
 * @property int|null $img2
 * @property int|null $img3
 * @property int|null $img4
 * @property int|null $img5
 * @property int|null $img6
 * @property int|null $img7
 * @property int|null $img8
 * @property int|null $img9
 * @property int|null $img10
 * @property int|null $img11
 * @property int|null $img12
 * @property int|null $img13
 * @property int|null $img14
 * @property int|null $img15
 * 
 * @property OperacionVehiculo $operacion_vehiculo
 *
 * @package App\Models
 */
class ImgOperacion extends Model
{
	protected $table = 'img_operacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'img1' => 'int',
		'img2' => 'int',
		'img3' => 'int',
		'img4' => 'int',
		'img5' => 'int',
		'img6' => 'int',
		'img7' => 'int',
		'img8' => 'int',
		'img9' => 'int',
		'img10' => 'int',
		'img11' => 'int',
		'img12' => 'int',
		'img13' => 'int',
		'img14' => 'int',
		'img15' => 'int'
	];

	protected $fillable = [
		'id',
		'img1',
		'img2',
		'img3',
		'img4',
		'img5',
		'img6',
		'img7',
		'img8',
		'img9',
		'img10',
		'img11',
		'img12',
		'img13',
		'img14',
		'img15'
	];

	public function operacion_vehiculo()
	{
		return $this->hasOne(OperacionVehiculo::class, 'img_operacion', 'id');
	}
}
