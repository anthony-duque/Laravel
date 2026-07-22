<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ScheduledInVin
 * 
 * @property int $id
 * @property Carbon|null $scheduled_in
 * @property int $ro_num
 * @property string|null $vin
 * @property float|null $ro_hours
 * @property float|null $assigned_hours
 * @property float|null $estimate_amt
 * @property bool|null $total_loss
 * @property string|null $location
 * @property int|null $loc_id
 *
 * @package App\Models
 */
class ScheduledInVin extends Model
{
	protected $table = 'scheduled_in_vin';
	public $timestamps = false;

	protected $casts = [
		'scheduled_in' => 'datetime',
		'ro_num' => 'int',
		'ro_hours' => 'float',
		'assigned_hours' => 'float',
		'estimate_amt' => 'float',
		'total_loss' => 'bool',
		'loc_id' => 'int'
	];

	protected $fillable = [
		'scheduled_in',
		'ro_num',
		'vin',
		'ro_hours',
		'assigned_hours',
		'estimate_amt',
		'total_loss',
		'location',
		'loc_id'
	];
}
