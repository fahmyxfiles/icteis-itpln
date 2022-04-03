<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventSocialMedia
 *
 * @property $id
 * @property $event_id
 * @property $social_type
 * @property $social_link
 * @property $created_at
 * @property $updated_at
 *
 * @property Event $event
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EventSocialMedia extends Model
{
    static $rules = [
		'event_id' => 'required',
		'social_type' => 'required',
		'social_link' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id','social_type','social_link'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function all_events()
    {
        return Event::all();
    }
    

}
