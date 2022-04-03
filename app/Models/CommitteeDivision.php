<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CommitteeDivision
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Committee[] $committees
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CommitteeDivision extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function committees()
    {
        return $this->hasMany(Committee::class);
    }
    

}
