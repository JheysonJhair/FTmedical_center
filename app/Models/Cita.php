<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Citum
 * 
 * @property string $idCita
 * @property string|null $descripcion
 * @property string $idEstudiante
 * @property string $idArea
 * @property Carbon|null $fecha
 * @property Carbon|null $hora
 * 
 * @property Area $area
 * @property Estudiante $estudiante
 *
 * @package App\Models
 */
class Cita extends Model
{
	protected $table = 'cita';
	protected $primaryKey = 'idCita';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'hora' => 'datetime'
	];

	protected $fillable = [
		'descripcion',
		'idEstudiante',
		'idArea',
		'fecha',
		'hora'
	];

	public function area()
	{
		return $this->belongsTo(Area::class, 'idArea');
	}

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idEstudiante');
	}
}
