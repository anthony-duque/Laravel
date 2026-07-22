<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartsStatus
 * 
 * @property int $id
 * @property string|null $part_number
 * @property string|null $part_description
 * @property string|null $part_type
 * @property int|null $ro_qty
 * @property string|null $vendor_name
 * @property string|null $po_number
 * @property int|null $ordered_qty
 * @property Carbon|null $expected_delivery
 * @property int|null $received_qty
 * @property int|null $returned_qty
 * @property int|null $line
 * @property string|null $ro_num
 * @property Carbon|null $order_date
 * @property Carbon|null $invoice_date
 * @property string|null $location
 * @property int|null $loc_id
 * @property string|null $part_status
 * @property string|null $repair_code
 * @property float|null $part_price
 *
 * @package App\Models
 */
class PartsStatus extends Model
{
	protected $table = 'parts_status';
	public $timestamps = false;

	protected $casts = [
		'ro_qty' => 'int',
		'ordered_qty' => 'int',
		'expected_delivery' => 'datetime',
		'received_qty' => 'int',
		'returned_qty' => 'int',
		'line' => 'int',
		'order_date' => 'datetime',
		'invoice_date' => 'datetime',
		'loc_id' => 'int',
		'part_price' => 'float'
	];

	protected $fillable = [
		'part_number',
		'part_description',
		'part_type',
		'ro_qty',
		'vendor_name',
		'po_number',
		'ordered_qty',
		'expected_delivery',
		'received_qty',
		'returned_qty',
		'line',
		'ro_num',
		'order_date',
		'invoice_date',
		'location',
		'loc_id',
		'part_status',
		'repair_code',
		'part_price'
	];
}
