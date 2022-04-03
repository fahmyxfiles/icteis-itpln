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
    
    static $createRules = [
      'title' => 'required',
      'publication_field_id' => 'required',
      'cover_image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'description_body' => 'required',
      'current_issue' => 'required',
      'published_date' => 'required',
      'url' => 'required',
    ];
    static $updateRules = [
      'title' => 'required',
      'publication_field_id' => 'required',
      'cover_image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
      'description_body' => 'required',
      'current_issue' => 'required',
      'published_date' => 'required',
      'url' => 'required',
      ];

      protected $casts = [
        'published_date' => 'datetime:Y-m-d',
      ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','publication_field_id','cover_image','description_body','current_issue','doi_prefix','p_issn','e_issn','published_date','url'];

    public function all_publication_fields(){
      return PublicationField::all();
    }

    public function all_publication_tags(){
      return PublicationTag::all();
    }

    public function publication_field()
    {
      return $this->belongsTo(PublicationField::class);
    }

    public function publication_tags()
    {
      return $this->belongsToMany(PublicationTag::class);
    }
}
