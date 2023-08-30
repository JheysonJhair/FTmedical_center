<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 * 
 * @property string $idMedicamento
 * @property string $codigo
 * @property string $nombre
 * @property string $tipo
 * @property string|null $descripcion
 * @property int $stock
 * @property string $idAlmacen
 * @property string $idProveedor
 * @property string $idReceta
 * 
 * @property Almacen $almacen
 * @property Proveedor $proveedor
 * @property Recetum $recetum
 *
 * @package App\Models
 */
class Medicamento extends Model
{
	protected $table = 'medicamento';
	protected $primaryKey = 'idMedicamento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'stock' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'tipo',
		'descripcion',
		'stock',
		'idAlmacen',
		'idProveedor',
		'idReceta'
	];

	public function almacen()
	{
		return $this->belongsTo(Almacen::class, 'idAlmacen');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'idProveedor');
	}

	public function recetum()
	{
		return $this->belongsTo(Recetum::class, 'idReceta');
	}
}
