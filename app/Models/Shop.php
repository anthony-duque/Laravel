<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Shop
 *
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $last_data_upload
 * @property int $company_id
 *
 * @package App\Models
 */
class Shop extends Model
{
	protected $table = 'shops';
	public $timestamps = false;

	protected $casts = [
		'last_data_upload' => 'datetime',
		'company_id' => 'int'
	];

	protected $fillable = [
		'name',
		'last_data_upload',
		'company_id'
	];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function repairs(): HasMany
    {
        return $this->hasMany(Repair::class);
    }

    public function vendors(): HasMany
    {
        return $this->hasMany(Vendor::class);
    }

    public function employees() : HasMany
    {
        return $this->hasMany(Employee::class);
    }

}
