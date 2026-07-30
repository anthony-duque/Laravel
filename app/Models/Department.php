<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $id
 * @property string $department_code
 * @property string|null $description
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	public $timestamps = false;

	protected $fillable = [
		'department_code',
		'description'
	];
}
