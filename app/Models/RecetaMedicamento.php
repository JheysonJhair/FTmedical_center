<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecetaMedicamento
 * 
 * @property string $idRecetaMedicamento
 * @property string $idReceta
 * @property string $idMedicamento
 * 
 * @property Medicamento $medicamento
 * @property Recetum $recetum
 *
 * @package App\Models
 */
class RecetaMedicamento extends Model
{
	protected $table = 'receta_medicamento';
	protected $primaryKey = 'idRecetaMedicamento';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idReceta',
		'idMedicamento'
	];

	public function medicamento()
	{
		return $this->belongsTo(Medicamento::class, 'idMedicamento');
	}

	public function receta()
	{
		return $this->belongsTo(Receta::class, 'idReceta');
	}
}
