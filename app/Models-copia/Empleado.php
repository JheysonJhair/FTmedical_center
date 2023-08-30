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
 * 
 * @property Dato $dato
 * @property Collection|Rol[] $rols
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

	public function dato()
	{
		return $this->belongsTo(Dato::class, 'dni');
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_empleado', 'idEMPLEADO', 'idRol')
					->withPivot('idRolEmpleado');
	}
}
