<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    //To disable the timestat at the DataBase
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','email','description','number_stars'];
}
