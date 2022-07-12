<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', '>', date("Y-m-d"))
                        ->where('departure_time', '>', date("h:i:sa"))->get();

        return view('home', compact('trains'));
    }
}
