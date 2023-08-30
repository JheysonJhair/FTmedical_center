<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolEmpleado
 * 
 * @property string $idRolEmpleado
 * @property string $idRol
 * @property string $idEMPLEADO
 * 
 * @property Empleado $empleado
 * @property Rol $rol
 *
 * @package App\Models
 */
class RolEmpleado extends Model
{
	protected $table = 'rol_empleado';
	protected $primaryKey = 'idRolEmpleado';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idRol',
		'idEMPLEADO'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'idEMPLEADO');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'idRol');
	}
}
