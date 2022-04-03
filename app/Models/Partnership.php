<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partnership
 *
 * @property $id
 * @property $name
 * @property $logo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partnership extends Model
{
    
    static $rules = [
		'name' => 'required',
		'logo' => 'file|image|mimes:jpeg,png,jpg|max:2048',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','logo'];



}
