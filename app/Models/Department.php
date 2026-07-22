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
 * @property string $dept_code
 * @property string|null $description
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	public $timestamps = false;

	protected $fillable = [
		'dept_code',
		'description'
	];
}
