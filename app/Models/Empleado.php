<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property string $idEMPLEADO
 * @property string $especialidad
 * @property string|null $descripcion
 * @property string $dni
 * @property string $idArea
 * 
 * @property Area $area
 * @property Dato $dato
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleado';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'especialidad',
		'descripcion'
	];

	public function area()
	{
		return $this->belongsTo(Area::class, 'idArea');
	}

	public function dato()
	{
		return $this->belongsTo(Dato::class, 'dni');
	}

	public function usuarios()
	{
		return $this->hasOne(Usuario::class, 'idEmpleado');
	}
}
