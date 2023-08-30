<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolUsuario
 * 
 * @property string $idRolUsuario
 * @property string $idRol
 * @property string $idUsuario
 * 
 * @property Rol $rol
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class RolUsuario extends Model
{
	protected $table = 'rol_usuario';
	protected $primaryKey = 'idRolUsuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idRol',
		'idUsuario'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'idRol');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idUsuario');
	}
}
