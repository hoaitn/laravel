<?php

namespace App\Modules\Test\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'test';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tit'];
     
}
