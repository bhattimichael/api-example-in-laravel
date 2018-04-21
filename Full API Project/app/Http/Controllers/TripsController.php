<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trips;

class TripsController extends Controller
{
	public function index($from,$to) {
		$flights = Trips::with(['fromAirpot','toAirpot'])->where('from',$from)->where('to',$to)->get();

    	//Replace fromAirport and Toairport id to Airport Name
    	foreach ($flights as $flight) {
    		$flight->from = $flight->fromAirpot->name;
    		$flight->to = $flight->toAirpot->name;
    	}
        $response = ["Status"=>"Ok","Message" => "Successfull","Flights" => $flights];
        if ($flights->isEmpty()) {
            $response['Status'] = "Warning";
            $response['Message'] = "No flights between the selected airports";
        }
        return $response;
    	
    }
	
	//create new Flight trip
	public function store(Request $request) {
        return Trips::create($request->all());
    }

    
    //Delete flight trip
    public function delete($id){
        
    	$deleted =Trips::find($id)->delete();
        $response = ["Status"=>"Ok","Message"=>"Successfully Deleted"];
        if (!$deleted)
        $response = ["Status"=>"Warning","Message"=>"Not Deleted"];
        return json_encode($response);
    }
}
