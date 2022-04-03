<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reviewer
 *
 * @property $id
 * @property $name
 * @property $organization
 * @property $profile_photo
 * @property $role
 * @property $biodata
 * @property $created_at
 * @property $updated_at
 *
 * @property ReviewerSocialProfile[] $reviewerSocialProfiles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reviewer extends Model
{
    
    static $rules = [
		'name' => 'required',
		'organization' => 'required',
		'profile_photo' => 'file|image|mimes:jpeg,png,jpg|max:2048',
		'role' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','organization','profile_photo','role','biodata'];

    public function getRouteParam(){
      return ['id_slug' => $this->id . '-' . str_slug($this->name)];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviewer_social_profiles()
    {
        return $this->hasMany(ReviewerSocialProfile::class);
    }
}
