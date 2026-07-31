<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Company
 *
 * @property int $id
 * @property string $company_code
 * @property string|null $address
 * @property string $name
 * @property string|null $pass_code
 * @property string|null $phone
 * @property Carbon|null $active_start_date
 * @property Carbon|null $active_end_date
 * @property string|null $contact_person
 * @property string|null $email
 * @property Carbon|null $account_signup_date
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'companies';
	public $timestamps = false;

	protected $casts = [
		'active_start_date' => 'datetime',
		'active_end_date' => 'datetime',
		'account_signup_date' => 'datetime'
	];

	protected $fillable = [
		'company_code',
		'address',
		'name',
		'pass_code',
		'phone',
		'active_start_date',
		'active_end_date',
		'contact_person',
		'email',
		'account_signup_date'
	];

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }

    public function dumpRecords() : HasMany
    {
        return $this->hasMany(ExtractFileDump::class);
    }

}
