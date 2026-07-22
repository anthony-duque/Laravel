<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdhocTable
 * 
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property string|null $description
 *
 * @package App\Models
 */
class AdhocTable extends Model
{
	protected $table = 'adhoc_table';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'value',
		'description'
	];
}
