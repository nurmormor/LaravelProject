<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        return view('flights'); // Cargaría resources/views/flights.blade.php
    }
}
