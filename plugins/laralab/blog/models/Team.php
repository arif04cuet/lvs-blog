<?php namespace Laralab\Blog\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'laralab_blog_teams';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'photo' => 'required'
    ];

    public $attachOne = [
        'photo' => 'System\Models\File',
    ];



    public function scopeActive($query)
    {
        return $query;
    }
    public function afterDelete()
    {
        $this->photo->delete();
    }

    public function beforeValidate()
    {

    }
}
