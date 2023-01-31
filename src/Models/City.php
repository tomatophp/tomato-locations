<?php

namespace TomatoPHP\TomatoLocations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property string $shipping
 * @property integer $country_id
 * @property string $lat
 * @property string $lang
 * @property string $created_at
 * @property string $updated_at
 */
class City extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'shipping', 'country_id', 'lat', 'lang', 'created_at', 'updated_at'];


    /**
     * @return BelongsTo
     */
    public  function  country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
