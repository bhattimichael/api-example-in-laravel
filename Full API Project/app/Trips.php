<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'number', 'from' ,'to'];

    /**
     * The attributes that should be hidden for api.
     *
     * @var array
     */
    protected $hidden = ["created_at", "updated_at","fromAirpot","toAirpot"];


	/**
     * Relation to fetch fromAirport Name
     *
     * Flight Origin Airport Name
    */
    public function fromAirpot() {
    	return $this->belongsTo('App\Airports','from','id');
    }


    /**
     * Relation to fetch ToAirport Name
     *
     * Flight Destination Airport Name
    */
    public function toAirpot() {
    	return $this->belongsTo('App\Airports','to','id');
    }
}
