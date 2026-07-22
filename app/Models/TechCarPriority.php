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
 * @property int $ro_num
 * @property int $priority
 * @property int $location_id
 * @property string $dept_code
 *
 * @package App\Models
 */
class TechCarPriority extends Model
{
	protected $table = 'tech_car_priority';
	public $timestamps = false;

	protected $casts = [
		'ro_num' => 'int',
		'priority' => 'int',
		'location_id' => 'int'
	];

	protected $fillable = [
		'technician',
		'ro_num',
		'priority',
		'location_id',
		'dept_code'
	];
}
