<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property string $idUsuario
 * @property string|null $usuario
 * @property string|null $contraseña
 * 
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'idUsuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'usuario',
		'contraseña'
	];

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_usuario', 'idUsuario', 'idRol')
					->withPivot('idRolUsuario');
	}
}
