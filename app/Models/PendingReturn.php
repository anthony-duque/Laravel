<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PendingReturn
 * 
 * @property int $id
 * @property string $ro_number
 * @property string|null $owner
 * @property string|null $vehicle
 * @property string $vendor
 * @property string $return_number
 * @property Carbon|null $pickup_date
 * @property int|null $shop_id
 *
 * @package App\Models
 */
class PendingReturn extends Model
{
	protected $table = 'pending_returns';
	public $timestamps = false;

	protected $casts = [
		'pickup_date' => 'datetime',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'ro_number',
		'owner',
		'vehicle',
		'vendor',
		'return_number',
		'pickup_date',
		'shop_id'
	];
}
