<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialType
 * 
 * @property int $id
 * @property string $material_type
 * @property string|null $description
 * 
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class MaterialType extends Model
{
	protected $table = 'material_types';
	public $timestamps = false;

	protected $fillable = [
		'material_type',
		'description'
	];

	public function materials()
	{
		return $this->hasMany(Material::class, 'material_type', 'material_type');
	}
}
