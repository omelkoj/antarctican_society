<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\stations_copy;

class PagesController extends Controller
{
    //method - function created inside class, public so we can access from outside of class
    public function index() {
        //$title = 'Welcome to Laravel!!!';
        $stations = DB::table('stations')->get();
        //second way with model
        $stations_copy = stations_copy::get();
        //two ways
        //return view('index', compact('title'));
        return view('index', ['stations'=>$stations, 'stations_copy'=>$stations_copy]);
        //->with('title', $title)
    }

    public function about() {
        $title = 'About Us.......';
        return view('about')->with('title', $title);
    }

    public function services() {
        //associative array (key-value pairs)
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('services')->with($data);
    }
}
