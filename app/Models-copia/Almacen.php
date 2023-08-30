<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacen
 * 
 * @property string $idAlmacen
 * @property string $codigo
 * @property string $nombre
 * @property string $tipo
 * @property Carbon $fechaCreacion
 * @property Carbon $fechaVencimiento
 * @property string $descripcion
 * @property int $stock
 * 
 * @property Collection|Medicamento[] $medicamentos
 *
 * @package App\Models
 */
class Almacen extends Model
{
	protected $table = 'almacen';
	protected $primaryKey = 'idAlmacen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fechaCreacion' => 'datetime',
		'fechaVencimiento' => 'datetime',
		'stock' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'tipo',
		'fechaCreacion',
		'fechaVencimiento',
		'descripcion',
		'stock'
	];

	public function medicamentos()
	{
		return $this->hasMany(Medicamento::class, 'idAlmacen');
	}
}
