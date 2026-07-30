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
 * @property Carbon|null $scheduled_in_date
 * @property string $ro_num
 * @property string|null $vin
 * @property float|null $ro_hours
 * @property float|null $assigned_hours
 * @property float|null $estimate_amount
 * @property bool|null $total_loss
 * @property string|null $shop_name
 * @property int|null $shop_id
 *
 * @package App\Models
 */
class ScheduledInVin extends Model
{
	protected $table = 'scheduled_in_vin';
	public $timestamps = false;

	protected $casts = [
		'scheduled_in_date' => 'datetime',
		'ro_hours' => 'float',
		'assigned_hours' => 'float',
		'estimate_amount' => 'float',
		'total_loss' => 'bool',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'scheduled_in_date',
		'ro_num',
		'vin',
		'ro_hours',
		'assigned_hours',
		'estimate_amount',
		'total_loss',
		'shop_name',
		'shop_id'
	];
}
