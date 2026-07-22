<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CellEmailLookup
 * 
 * @property int $id
 * @property string $cell_name
 * @property string $email_format
 *
 * @package App\Models
 */
class CellEmailLookup extends Model
{
	protected $table = 'cell_email_lookups';
	public $timestamps = false;

	protected $fillable = [
		'cell_name',
		'email_format'
	];
}
