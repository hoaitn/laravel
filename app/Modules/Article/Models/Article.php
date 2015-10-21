<?php

namespace App\Modules\Article\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'detail', 'created_date', 'modified_date'];
     
}
