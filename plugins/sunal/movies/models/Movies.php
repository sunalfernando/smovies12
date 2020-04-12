<?php namespace Sunal\Movies\Models;

use Model;

/**
 * Model
 */
class Movies extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sunal_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        
            'genres' => [
            'Sunal\Movies\Models\Genre',
            'table' => 'sunal_movies_movies_genres',
            'order' => 'genre_title'
         ]

    ];

    public $attachOne = [
        'poster' => 'System\Models\File',
        'cover'  => 'System\Models\File'

    ];

    public $attachMany =[
        'gallery' => 'System\Models\File'
    ];

}
