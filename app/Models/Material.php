<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 * 
 * @property int $id
 * @property string $part_number
 * @property string|null $description
 * @property string|null $unit
 * @property string|null $type
 * @property int|null $reorder_quantity
 * @property string|null $brand
 * 
 * @property MaterialType|null $material_type
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
		'type',
		'reorder_quantity',
		'brand'
	];

	public function material_type()
	{
		return $this->belongsTo(MaterialType::class, 'type', 'code');
	}
}
