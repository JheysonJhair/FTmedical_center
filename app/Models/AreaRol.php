<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreaRol
 * 
 * @property string $idRolArea
 * @property string $idArea
 * @property string $idRol
 * 
 * @property Area $area
 * @property Rol $rol
 *
 * @package App\Models
 */
class AreaRol extends Model
{
	protected $table = 'area_rol';
	protected $primaryKey = 'idRolArea';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idArea',
		'idRol'
	];

	public function area()
	{
		return $this->belongsTo(Area::class, 'idArea');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'idRol');
	}
}
