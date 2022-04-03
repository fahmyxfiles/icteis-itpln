<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property $id
 * @property $published
 * @property $name
 * @property $file_path
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Document extends Model
{
    
    static $createRules = [
		'published' => 'required',
		'name' => 'required',
		'file_path' => 'required|file|mimes:doc,docx,ppt,pptx,txt,xls,xlsx,pdf|max:4096',
    ];

    static $updateRules = [
      'published' => 'required',
      'name' => 'required',
      'file_path' => 'file|mimes:doc,docx,ppt,pptx,txt,xls,xlsx,pdf|max:4096',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['published','name','file_path'];



}
