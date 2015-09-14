<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
	/**
	* The database table used by the model.nama tablesdfsf
	*
	* @var string
	*/
	protected $table = 'penumpang';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['nama_penumpang', 'no_telefon_penumpang'];

	public function tempahan()
	{
		return $this->belongsTo('App\Tempahan');
	}
}
