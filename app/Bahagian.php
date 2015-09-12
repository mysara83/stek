<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahagian extends Model
{
    /**
     * The database table used by the model.nama tablesdfsf
     *
     * @var string
     */
    protected $table = 'bahagian';

            /**
            * The attributes that are mass assignable.
            *
            * @var array
            */
            protected $fillable = ['nama', 'nama_ringkas'];
}
