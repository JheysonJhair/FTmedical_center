<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsultaPaciente
 * 
 * @property string $idConsulta
 * @property string $apetito
 * @property string $sed
 * @property string $sueño
 * @property string $estado_animo
 * @property string $diagnostico
 * @property string|null $tratamiento
 * @property string|null $descripcion
 * @property string|null $observaciones
 * @property string|null $examenesAuxiliares
 * @property string $refereciaArea
 * @property string $idPaciente
 * @property Carbon|null $fecha
 * 
 * @property Estudiante $estudiante
 *
 * @package App\Models
 */
class ConsultaPaciente extends Model
{
	protected $table = 'consulta_paciente';
	protected $primaryKey = 'idConsulta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'apetito' => 'binary',
		'sed' => 'binary',
		'sueño' => 'binary',
		'estado_animo' => 'binary',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'apetito',
		'sed',
		'sueño',
		'estado_animo',
		'diagnostico',
		'tratamiento',
		'descripcion',
		'observaciones',
		'examenesAuxiliares',
		'refereciaArea',
		'idPaciente',
		'fecha'
	];

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idPaciente');
	}
}
