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
 * @property string $shop_code
 * @property string $shop_name
 * @property string $ro_number
 * @property string|null $estimator
 * @property string|null $technician
 * @property string|null $owner
 * @property string|null $vehicle_color
 * @property string|null $license_plate
 * @property int|null $vehicle_year
 * @property string|null $vehicle_make
 * @property string|null $vehicle_model
 * @property string|null $current_phase
 * @property int|null $line_number
 * @property string|null $repair_code
 * @property string|null $part_desc
 * @property string|null $part_num
 * @property string|null $part_type
 * @property string|null $part_status
 * @property string|null $vendor_name
 * @property float|null $part_price
 * @property int|null $ro_quantity
 * @property Carbon|null $order_date
 * @property int|null $order_quantity
 * @property int|null $received_quantity
 * @property Carbon|null $received_date
 * @property int|null $return_quantity
 * @property string|null $vin
 * @property Carbon|null $date_in
 * @property Carbon|null $target_date
 * @property int $company_id
 * @property int|null $shop_id
 *
 * @package App\Models
 */
class ExtractFileDump extends Model
{
	protected $table = 'extract_file_dump';
	public $timestamps = false;

	protected $casts = [
		'vehicle_year' => 'int',
		'line_number' => 'int',
		'part_price' => 'float',
		'ro_quantity' => 'int',
		'order_date' => 'datetime',
		'order_quantity' => 'int',
		'received_quantity' => 'int',
		'received_date' => 'datetime',
		'return_quantity' => 'int',
		'date_in' => 'datetime',
		'target_date' => 'datetime',
		'company_id' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'shop_code',
		'shop_name',
		'ro_number',
		'estimator',
		'technician',
		'owner',
		'vehicle_color',
		'license_plate',
		'vehicle_year',
		'vehicle_make',
		'vehicle_model',
		'current_phase',
		'line_number',
		'repair_code',
		'part_desc',
		'part_num',
		'part_type',
		'part_status',
		'vendor_name',
		'part_price',
		'ro_quantity',
		'order_date',
		'order_quantity',
		'received_quantity',
		'received_date',
		'return_quantity',
		'vin',
		'date_in',
		'target_date',
		'company_id',
		'shop_id'
	];
}
