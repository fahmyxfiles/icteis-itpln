<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImportantDate
 *
 * @property $id
 * @property $name
 * @property $icon
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ImportantDate extends Model
{
    
    static $rules = [
		'name' => 'required',
		'icon' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','icon','date'];

    protected $casts = [
      'date' => 'datetime:Y-m-d',
    ];


}
