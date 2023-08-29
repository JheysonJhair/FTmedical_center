<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialClinico
 * 
 * @property string $idHistorial
 * @property int $numero
 * @property string $diagnostico
 * @property string $tratamiento
 * @property string $recomendaciones
 * @property string $idFecha
 * @property string $idEstudiante
 * @property Carbon $fecha
 * 
 * @property Estudiante $estudiante
 *
 * @package App\Models
 */
class HistorialClinico extends Model
{
	protected $table = 'historial_clinico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'numero',
		'diagnostico',
		'tratamiento',
		'recomendaciones',
		'fecha'
	];

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idEstudiante');
	}
}
