<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airports;
class AirportsController extends Controller
{
    public function index()
    {
    	 return Airports::all();
    } 
}
