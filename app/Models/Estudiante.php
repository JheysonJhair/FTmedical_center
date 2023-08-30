<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 * 
 * @property string $idEstudiante
 * @property string|null $carrera
 * @property string|null $facultad
 * @property string|null $semestre
 * @property string $dni
 * 
 * @property Dato $dato
 * @property Collection|Citum[] $cita
 * @property Collection|ConsultaPaciente[] $consulta_pacientes
 * @property Collection|ControlPaciente[] $control_pacientes
 * @property Collection|HistorialClinico[] $historial_clinicos
 * @property Collection|Recetum[] $receta
 *
 * @package App\Models
 */
class Estudiante extends Model
{
	protected $table = 'estudiante';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'carrera',
		'facultad',
		'semestre'
	];

	public function dato()
	{
		return $this->belongsTo(Dato::class, 'dni');
	}

	public function cita()
	{
		return $this->hasOne(Cita::class, 'idEstudiante');
	}

	public function consulta_pacientes()
	{
		return $this->hasMany(ConsultaPaciente::class, 'idPaciente');
	}

	public function control_pacientes()
	{
		return $this->hasMany(ControlPaciente::class, 'idEstudiante');
	}

	public function historial_clinicos()
	{
		return $this->hasOne(HistorialClinico::class, 'idEstudiante');
	}

	public function receta()
	{
		return $this->hasOne(Receta::class, 'idEstudiante');
	}
}
