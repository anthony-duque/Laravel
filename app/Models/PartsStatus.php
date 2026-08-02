<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Awobaz\Compoships\Compoships;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class PartsStatus
 *
 * @property int $id
 * @property string|null $part_number
 * @property string|null $part_description
 * @property string|null $part_type
 * @property int|null $ro_quantity
 * @property string|null $vendor_name
 * @property string|null $po_number
 * @property int|null $ordered_quantity
 * @property Carbon|null $expected_delivery_date
 * @property int|null $received_quantity
 * @property int|null $returned_quantity
 * @property int|null $line_number
 * @property string|null $ro_number
 * @property Carbon|null $order_date
 * @property Carbon|null $invoice_date
 * @property int|null $shop_id
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
		'ro_quantity' => 'int',
		'ordered_quantity' => 'int',
		'expected_delivery_date' => 'datetime',
		'received_quantity' => 'int',
		'returned_quantity' => 'int',
		'line_number' => 'int',
		'order_date' => 'datetime',
		'invoice_date' => 'datetime',
		'shop_id' => 'int',
		'part_price' => 'float'
	];

	protected $fillable = [
		'part_number',
		'part_description',
		'part_type',
		'ro_quantity',
		'vendor_name',
		'po_number',
		'ordered_quantity',
		'expected_delivery_date',
		'received_quantity',
		'returned_quantity',
		'line_number',
		'ro_number',
		'order_date',
		'invoice_date',
		'shop_id',
		'part_status',
		'repair_code',
		'part_price'
	];

    use Compoships;

    public function repair(): BelongsTo
    {
        return $this->belongsTo(Repair::class, ['shop_id', 'ro_number'], ['shop_id', 'ro_number']);
    }
}
