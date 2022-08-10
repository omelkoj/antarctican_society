<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationCreateModel extends Model
{
    use HasFactory;

    protected $table = "stations";
    public $timestamps = false;
    public $primaryKey = 'Station_ID';

        protected $fillable = [
        'Station_ID',
        'Station_Name',
        'Start_Date',
        'End_Date',
        'Latitude_deg',
        'Latitude_deg',
        'Latitude_min',
        'Latitude_sec',
        'Longitude_deg',
        'Longitude_min',
        'Longitude_sec',
        'Description',
        'Image',
        'Country',
    ];
}
