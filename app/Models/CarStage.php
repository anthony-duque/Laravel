<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarStage
 * 
 * @property int $id
 * @property string $ro_number
 * @property int $shop_id
 * @property int $sequence_number
 *
 * @package App\Models
 */
class CarStage extends Model
{
	protected $table = 'car_stage';
	public $timestamps = false;

	protected $casts = [
		'shop_id' => 'int',
		'sequence_number' => 'int'
	];

	protected $fillable = [
		'ro_number',
		'shop_id',
		'sequence_number'
	];
}
