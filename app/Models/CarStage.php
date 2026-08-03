<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Awobaz\Compoships\Compoships;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class CarStage
 *
 * @property int $id
 * @property string $ro_number
 * @property int $shop_id
 * @property int $sequence_number
 *
 * @package App\Models
 */
class CarStage extends Model
{
    use Compoships;

	protected $table = 'car_stage';
	public $timestamps = false;

	protected $casts = [
		'shop_id' => 'int',
		'sequence_number' => 'int'
	];

	protected $fillable = [
		'ro_number',
		'shop_id',
		'sequence_number'
	];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function stageHeading(): BelongsTo
    {
        return $this->belongsTo(StageHeading::class,
                                ['shop_id', 'sequence_number'],
                                ['shop_id', 'sequence_number']);
    }

}
