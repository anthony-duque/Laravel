<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Material
 *
 * @property int $id
 * @property string $part_number
 * @property string|null $description
 * @property string|null $unit
 * @property string|null $material_type
 * @property int|null $reorder_quantity
 * @property string|null $brand
 *
 *
 * @package App\Models
 */
class Material extends Model
{
	protected $table = 'materials';
	public $timestamps = false;

	protected $casts = [
		'reorder_quantity' => 'int'
	];

	protected $fillable = [
		'part_number',
		'description',
		'unit',
		'material_type',
		'reorder_quantity',
		'brand'
	];

	public function material_type() : BelongsTo
	{
		return $this->belongsTo(MaterialType::class);
	}

}
