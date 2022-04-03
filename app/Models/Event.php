<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property $id
 * @property $alias
 * @property $name
 * @property $hero_text
 * @property $organizer
 * @property $start_date
 * @property $end_date
 * @property $location
 * @property $created_at
 * @property $updated_at
 *
 * @property EventSocialMedia[] $eventSocialMedias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends Model
{
    
    static $rules = [
		'alias' => 'required',
		'name' => 'required',
		'hero_text' => 'required',
		'organizer' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
		'location' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alias','name','hero_text','organizer','start_date','end_date','location'];

    protected $casts = [
      'start_date' => 'datetime:Y-m-d',
      'end_date' => 'datetime:Y-m-d',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function event_social_medias()
    {
        return $this->hasMany(EventSocialMedia::class);
    }
    

}
