<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TopicOfInterestScope
 *
 * @property $id
 * @property $topic_of_interest_id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property TopicOfInterest $topicOfInterest
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TopicOfInterestScope extends Model
{
    
    static $rules = [
		'topic_of_interest_id' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['topic_of_interest_id','name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function topic_of_interest()
    {
        return $this->belongsTo(TopicOfInterest::class);
    }

    public function all_topic_of_interests()
    {
        return TopicOfInterest::all();
    }
    

}
