<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {
    //To disable the timestat at the DataBase
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nickname','email'];
}
