<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property string $idRol
 * @property string $nombre
 * @property string $tipo
 * @property string|null $descripcion
 * 
 * @property Collection|Area[] $areas
 * @property Collection|Empleado[] $empleados
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'idRol';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'tipo',
		'descripcion'
	];

	public function areas()
	{
		return $this->belongsToMany(Area::class, 'area_rol', 'idRol', 'idArea')
					->withPivot('idRolArea');
	}

	public function empleados()
	{
		return $this->belongsToMany(Empleado::class, 'rol_empleado', 'idRol', 'idEMPLEADO')
					->withPivot('idRolEmpleado');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'rol_usuario', 'idRol', 'idUsuario')
					->withPivot('idRolUsuario');
	}
}
