<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tempahan extends Model
{
     /**
     * The database table used by the model.nama tablesdfsf
     *
     * @var string
     */
    protected $table = 'tempahan';

    protected $fillable= ['nama','email','bahagian', 'unit', 'no_telefon', 'destinasi', 'tujuan', 'tarikh_pergi', 'masa_pergi', 'tarikh_balik', 'masa_balik', 'bil_penumpang'];

    protected $dates = ['tarikh_pergi', 'masa_pergi', 'tarikh_balik', 'masa_balik'];

    public function penumpang()
    {
        return $this->hasMany('App\Penumpang');
    }

    public function getTarikhPergiAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setTarikhPergiAttribute($value)
    {
        $this->attributes['tarikh_pergi'] = Carbon::createFromFormat('d-m-Y', $value)->toDateString();
    }

    public function getMasaPergiAttribute($value)
    {
        return Carbon::parse($value)->format('h:i A');
    }

    public function setMasaPergiAttribute($value)
    {
        $this->attributes['masa_pergi'] = Carbon::createFromFormat('h:i A', $value)->toTimeString();
    }

    public function getTarikhBalikAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setTarikhBalikAttribute($value)
    {
        $this->attributes['tarikh_balik'] = Carbon::createFromFormat('d-m-Y', $value)->toDateString();
    }

    public function getMasaBalikAttribute($value)
    {
        return Carbon::parse($value)->format('h:i A');
    }

    public function setMasaBalikAttribute($value)
    {
        $this->attributes['masa_balik'] = Carbon::createFromFormat('h:i A', $value)->toTimeString();
    }
}
