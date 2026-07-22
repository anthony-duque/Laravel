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
 * @property int $ro_num
 * @property int $loc_id
 * @property int|null $stage_id
 *
 * @package App\Models
 */
class CarStage extends Model
{
	protected $table = 'car_stage';
	public $timestamps = false;

	protected $casts = [
		'ro_num' => 'int',
		'loc_id' => 'int',
		'stage_id' => 'int'
	];

	protected $fillable = [
		'ro_num',
		'loc_id',
		'stage_id'
	];
}
