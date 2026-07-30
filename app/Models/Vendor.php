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
 * @property int $shop_id
 * @property string|null $shop_name
 * @property bool|null $opt_oem
 * @property bool|null $aftermarket
 * @property bool|null $preferred
 * @property bool|null $electronic
 * @property int|null $vendor_id
 *
 * @package App\Models
 */
class Vendor extends Model
{
	protected $table = 'vendors';
	public $timestamps = false;

	protected $casts = [
		'oem' => 'bool',
		'shop_id' => 'int',
		'opt_oem' => 'bool',
		'aftermarket' => 'bool',
		'preferred' => 'bool',
		'electronic' => 'bool',
		'vendor_id' => 'int'
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
		'shop_id',
		'shop_name',
		'opt_oem',
		'aftermarket',
		'preferred',
		'electronic',
		'vendor_id'
	];
}
