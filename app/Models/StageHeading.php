<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Awobaz\Compoships\Compoships;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class StageHeading
 *
 * @property int $id
 * @property string $description
 * @property int $sequence_number
 * @property int $shop_id
 *
 * @package App\Models
 */
class StageHeading extends Model
{
	protected $table = 'stage_headings';
	public $timestamps = false;

	protected $casts = [
		'sequence_number' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'description',
		'sequence_number',
		'shop_id'
	];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function carStages()
    {
        return $this->hasMany(CarStage::class,
                    ['shop_id', 'sequence_number'],
                    ['shop_id', 'sequence_number']);

    }

}
