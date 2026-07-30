<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartsReturn
 * 
 * @property int $id
 * @property string $ro_number
 * @property Carbon $return_date
 * @property Carbon|null $vendor_pickup_date
 * @property string $part_number
 * @property string $part_description
 * @property string|null $part_type
 * @property float|null $amount
 * @property string $invoice_number
 * @property string|null $reason
 * @property string $vendor_name
 * @property int|null $shop_id
 *
 * @package App\Models
 */
class PartsReturn extends Model
{
	protected $table = 'parts_returns';
	public $timestamps = false;

	protected $casts = [
		'return_date' => 'datetime',
		'vendor_pickup_date' => 'datetime',
		'amount' => 'float',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'ro_number',
		'return_date',
		'vendor_pickup_date',
		'part_number',
		'part_description',
		'part_type',
		'amount',
		'invoice_number',
		'reason',
		'vendor_name',
		'shop_id'
	];
}
