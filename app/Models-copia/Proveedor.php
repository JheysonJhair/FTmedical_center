<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 * 
 * @property string $idProveedor
 * @property string $nombreEmpresa
 * @property string $direccion
 * @property string|null $telefono
 * @property string|null $ruc
 * 
 * @property Collection|Medicamento[] $medicamentos
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedor';
	protected $primaryKey = 'idProveedor';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombreEmpresa',
		'direccion',
		'telefono',
		'ruc'
	];

	public function medicamentos()
	{
		return $this->hasMany(Medicamento::class, 'idProveedor');
	}
}
