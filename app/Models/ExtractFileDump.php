<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExtractFileDump
 * 
 * @property int $id
 * @property string $shop_id
 * @property string $shop_name
 * @property string $ro_num
 * @property string|null $estimator
 * @property string|null $technician
 * @property string|null $owner
 * @property string|null $vehicle_color
 * @property string|null $license_plate
 * @property int|null $vehicle_year
 * @property string|null $vehicle_make
 * @property string|null $vehicle_model
 * @property string|null $current_phase
 * @property int|null $line_num
 * @property string|null $repair_code
 * @property string|null $part_desc
 * @property string|null $part_num
 * @property string|null $part_type
 * @property string|null $part_status
 * @property string|null $vendor_name
 * @property float|null $part_price
 * @property int|null $ro_qty
 * @property Carbon|null $order_date
 * @property int|null $order_qty
 * @property int|null $received_qty
 * @property Carbon|null $received_date
 * @property int|null $return_qty
 * @property string|null $vin
 * @property Carbon|null $date_in
 * @property Carbon|null $target_date
 * @property int $company_id
 * @property int|null $location_id
 *
 * @package App\Models
 */
class ExtractFileDump extends Model
{
	protected $table = 'extract_file_dump';
	public $timestamps = false;

	protected $casts = [
		'vehicle_year' => 'int',
		'line_num' => 'int',
		'part_price' => 'float',
		'ro_qty' => 'int',
		'order_date' => 'datetime',
		'order_qty' => 'int',
		'received_qty' => 'int',
		'received_date' => 'datetime',
		'return_qty' => 'int',
		'date_in' => 'datetime',
		'target_date' => 'datetime',
		'company_id' => 'int',
		'location_id' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'shop_name',
		'ro_num',
		'estimator',
		'technician',
		'owner',
		'vehicle_color',
		'license_plate',
		'vehicle_year',
		'vehicle_make',
		'vehicle_model',
		'current_phase',
		'line_num',
		'repair_code',
		'part_desc',
		'part_num',
		'part_type',
		'part_status',
		'vendor_name',
		'part_price',
		'ro_qty',
		'order_date',
		'order_qty',
		'received_qty',
		'received_date',
		'return_qty',
		'vin',
		'date_in',
		'target_date',
		'company_id',
		'location_id'
	];
}
