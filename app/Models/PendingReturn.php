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
 * @property int $RO
 * @property string|null $Owner
 * @property string|null $Vehicle
 * @property string $Vendor
 * @property string $Return_Number
 * @property Carbon|null $Pickup_Date
 *
 * @package App\Models
 */
class PendingReturn extends Model
{
	protected $table = 'pending_returns';
	public $timestamps = false;

	protected $casts = [
		'RO' => 'int',
		'Pickup_Date' => 'datetime'
	];

	protected $fillable = [
		'RO',
		'Owner',
		'Vehicle',
		'Vendor',
		'Return_Number',
		'Pickup_Date'
	];
}
