<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Employee
 *
 * @property int $id
 * @property string $user_name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $cell_number
 * @property string|null $cell_service
 * @property string|null $department_code
 * @property string|null $email
 * @property bool|null $notify
 * @property string|null $notif_preference
 * @property int $shop_id
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';
	public $timestamps = false;

	protected $casts = [
		'cell_number' => 'int',
		'notify' => 'bool',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'user_name',
		'first_name',
		'last_name',
		'cell_number',
		'cell_service',
		'department_code',
		'email',
		'notify',
		'notif_preference',
		'shop_id'
	];

    public function shop() : BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }
}
