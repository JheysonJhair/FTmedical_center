<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * 
 * @property string $idArea
 * @property string $nombre
 * @property string $tipoServicio
 * @property int $nroPiso
 * @property int $nroSala
 * @property Carbon $horarioAtencion
 * @property string|null $estado
 * @property string|null $descripcion
 * 
 * @property Collection|Rol[] $rols
 * @property Collection|Citum[] $cita
 *
 * @package App\Models
 */
class Area extends Model
{
	protected $table = 'area';
	protected $primaryKey = 'idArea';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nroPiso' => 'int',
		'nroSala' => 'int',
		'horarioAtencion' => 'datetime',
		'estado' => 'binary'
	];

	protected $fillable = [
		'nombre',
		'tipoServicio',
		'nroPiso',
		'nroSala',
		'horarioAtencion',
		'estado',
		'descripcion'
	];

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'area_rol', 'idArea', 'idRol')
					->withPivot('idRolArea');
	}

	public function cita()
	{
		return $this->hasMany(Citum::class, 'idArea');
	}
}
