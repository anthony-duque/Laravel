<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationId
 * 
 * @property int $id
 * @property string|null $location
 * @property Carbon|null $active_end_date
 * @property string|null $pass_code
 * @property Carbon|null $last_data_upload
 * @property int $company_id
 *
 * @package App\Models
 */
class LocationId extends Model
{
	protected $table = 'location_ids';
	public $timestamps = false;

	protected $casts = [
		'active_end_date' => 'datetime',
		'last_data_upload' => 'datetime',
		'company_id' => 'int'
	];

	protected $fillable = [
		'location',
		'active_end_date',
		'pass_code',
		'last_data_upload',
		'company_id'
	];
}
