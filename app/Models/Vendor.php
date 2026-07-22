<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 * 
 * @property int $id
 * @property string $name
 * @property bool|null $oem
 * @property string|null $phone_number
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zipcode
 * @property string|null $email
 * @property int $location_id
 * @property string|null $shop_location
 * @property bool|null $opt_oem
 * @property bool|null $aftermarket
 * @property bool|null $preferred
 * @property bool|null $electronic
 * @property int|null $vendor_ID
 *
 * @package App\Models
 */
class Vendor extends Model
{
	protected $table = 'vendors';
	public $timestamps = false;

	protected $casts = [
		'oem' => 'bool',
		'location_id' => 'int',
		'opt_oem' => 'bool',
		'aftermarket' => 'bool',
		'preferred' => 'bool',
		'electronic' => 'bool',
		'vendor_ID' => 'int'
	];

	protected $fillable = [
		'name',
		'oem',
		'phone_number',
		'address',
		'city',
		'state',
		'zipcode',
		'email',
		'location_id',
		'shop_location',
		'opt_oem',
		'aftermarket',
		'preferred',
		'electronic',
		'vendor_ID'
	];
}
