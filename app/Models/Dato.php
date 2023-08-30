<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 * 
 * @property string $dni
 * @property string $nombre
 * @property string $apellidos
 * @property string $correo
 * @property Carbon $fechaNacimiento
 * @property string $celular
 * @property string $direccion
 * 
 * @property Collection|Empleado[] $empleados
 * @property Collection|Estudiante[] $estudiantes
 *
 * @package App\Models
 */
class Dato extends Model
{
	protected $table = 'dato';
	protected $primaryKey = 'dni';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fechaNacimiento' => 'datetime'
	];

	protected $fillable = [
		'nombreDato',
		'apellidos',
		'correo',
		'fechaNacimiento',
		'celular',
		'direccion'
	];

	public function empleados()
	{
		return $this->hasOne(Empleado::class, 'dni');
	}

	public function estudiantes()
	{
		return $this->hasOne(Estudiante::class, 'dni');
	}
}
