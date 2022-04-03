<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Casts\RupiahCast;

/**
 * Class FeeType
 *
 * @property $id
 * @property $type
 * @property $description
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FeeType extends Model
{
    
    static $rules = [
		'type' => 'required',
		'description' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','description','price'];

    protected $casts = [
      'price' => RupiahCast::class,
    ];


}
