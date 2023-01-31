<?php

namespace TomatoPHP\TomatoLocations\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $phone
 * @property string $lat
 * @property string $lang
 * @property string $created_at
 * @property string $updated_at
 */
class Country extends Model
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
    protected $fillable = ['name', 'code', 'phone', 'lat', 'lang', 'created_at', 'updated_at'];
}
