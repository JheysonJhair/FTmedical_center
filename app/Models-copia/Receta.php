<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recetum
 * 
 * @property string $idReceta
 * @property int $numero
 * @property string|null $descripcion
 * @property string $idFecha
 * @property string $idEstudiante
 * @property Carbon|null $fecha
 * 
 * @property Estudiante $estudiante
 * @property Collection|Medicamento[] $medicamentos
 *
 * @package App\Models
 */
class Recetum extends Model
{
	protected $table = 'receta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'numero',
		'descripcion',
		'idEstudiante',
		'fecha'
	];

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idEstudiante');
	}

	public function medicamentos()
	{
		return $this->hasMany(Medicamento::class, 'idReceta');
	}
}
