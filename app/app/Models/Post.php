<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version June 25, 2021, 6:54 pm JST
 *
 * @property foreignId $user_id
 * @property string $title
 * @property string $content
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|numeric',
        'title' => 'required',
        'content' => 'required'
    ];

    
}
