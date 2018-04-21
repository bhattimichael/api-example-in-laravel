<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{ 
	/**
     * The attributes that should be hidden for api.
     *
     * 
     */
    protected $hidden = ["created_at", "updated_at"];  
}
