<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Committee
 *
 * @property $id
 * @property $committee_division_id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property CommitteeDivision $committeeDivision
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Committee extends Model
{
    
    static $rules = [
		'committee_division_id' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['committee_division_id','name'];

    public function committee_division()
    {
        return $this->belongsTo(CommitteeDivision::class);
    }
    
    public function all_committee_divisions()
    {
        return CommitteeDivision::all();
    }
}
