<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TechCarPriority
 * 
 * @property int $id
 * @property string $technician
 * @property string $ro_number
 * @property int $priority
 * @property int $shop_id
 * @property string $department_code
 *
 * @package App\Models
 */
class TechCarPriority extends Model
{
	protected $table = 'tech_car_priority';
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'technician',
		'ro_number',
		'priority',
		'shop_id',
		'department_code'
	];
}
