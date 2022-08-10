<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationCreate extends Controller
{
    //
    public function index() {
        return view ('modals.station_create');
    }
}
