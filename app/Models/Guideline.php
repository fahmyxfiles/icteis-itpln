<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guideline
 *
 * @property $id
 * @property $name
 * @property $published
 * @property $content
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guideline extends Model
{
    
    static $rules = [
		'name' => 'required',
		'published' => 'required',
		'content' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','published','content'];



}
