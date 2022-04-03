<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publication
 *
 * @property $id
 * @property $title
 * @property $publication_field_id
 * @property $cover_image
 * @property $description_body
 * @property $doi_prefix
 * @property $p_issn
 * @property $e_issn
 * @property $published_date
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Publication extends Model
{
    
    static $rules = [
		'title' => 'required',
		'publication_field_id' => 'required',
		'cover_image' => 'required',
		'description_body' => 'required',
		'published_date' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','publication_field_id','cover_image','description_body','doi_prefix','p_issn','e_issn','published_date','url'];

    public function publication_field()
    {
      return $this->belongsTo(PublicationField::class);
    }

    public function publication_tags()
    {
      return $this->belongsToMany(PublicationTag::class);
    }
}
