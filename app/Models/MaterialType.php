<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

	public function materials() : HasMany
	{
		return $this->hasMany(Material::class);
	}

}
