<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TopicOfInterest
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property TopicOfInterestScope[] $topicOfInterestScopes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TopicOfInterest extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topic_of_interest_scopes()
    {
        return $this->hasMany(TopicOfInterestScope::class);
    }
    

}
