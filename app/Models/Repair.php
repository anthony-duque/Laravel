<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repair
 * 
 * @property int $id
 * @property string $ro_num
 * @property string $owner
 * @property string $vehicle
 * @property Carbon|null $vehicle_in
 * @property string|null $technician
 * @property string $current_phase
 * @property float|null $parts_received
 * @property string|null $estimator
 * @property string|null $vehicle_color
 * @property string|null $license_plate
 * @property Carbon|null $scheduled_out
 * @property string|null $location
 * @property int|null $loc_id
 * @property string|null $insurance
 * @property string|null $vin
 *
 * @package App\Models
 */
class Repair extends Model
{
	protected $table = 'repairs';
	public $timestamps = false;

	protected $casts = [
		'vehicle_in' => 'datetime',
		'parts_received' => 'float',
		'scheduled_out' => 'datetime',
		'loc_id' => 'int'
	];

	protected $fillable = [
		'ro_num',
		'owner',
		'vehicle',
		'vehicle_in',
		'technician',
		'current_phase',
		'parts_received',
		'estimator',
		'vehicle_color',
		'license_plate',
		'scheduled_out',
		'location',
		'loc_id',
		'insurance',
		'vin'
	];
}
