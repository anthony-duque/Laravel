<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StageHeading
 * 
 * @property int $id
 * @property string $description
 * @property int $order_no
 * @property int $loc_id
 *
 * @package App\Models
 */
class StageHeading extends Model
{
	protected $table = 'stage_headings';
	public $timestamps = false;

	protected $casts = [
		'order_no' => 'int',
		'loc_id' => 'int'
	];

	protected $fillable = [
		'description',
		'order_no',
		'loc_id'
	];
}
