<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PublicationTag
 *
 * @property $id
 * @property $tag
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PublicationTag extends Model
{
    
    static $rules = [
		'tag' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tag'];

    public function publications()
    {
      return $this->belongsToMany(Publication::class);
    }

}
