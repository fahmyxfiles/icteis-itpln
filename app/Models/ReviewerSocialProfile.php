<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReviewerSocialProfile
 *
 * @property $id
 * @property $reviewer_id
 * @property $social_type
 * @property $social_link
 * @property $created_at
 * @property $updated_at
 *
 * @property Reviewer $reviewer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ReviewerSocialProfile extends Model
{
    
    static $rules = [
		'reviewer_id' => 'required',
		'social_type' => 'required',
		'social_link' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reviewer_id','social_type','social_link'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }

    public function all_reviewers()
    {
        return Reviewer::all();
    }
    

}
