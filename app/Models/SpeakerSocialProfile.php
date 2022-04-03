<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeakerSocialProfile
 *
 * @property $id
 * @property $speaker_id
 * @property $social_type
 * @property $social_link
 * @property $created_at
 * @property $updated_at
 *
 * @property Speaker $speaker
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SpeakerSocialProfile extends Model
{
    
    static $rules = [
		'speaker_id' => 'required',
		'social_type' => 'required',
		'social_link' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['speaker_id','social_type','social_link'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function all_speakers()
    {
        return Speaker::all();
    }
    

}
