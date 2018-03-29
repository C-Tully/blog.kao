<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    //
        //
    public function getPostsByMonthYear($date){

    	//parse date and get month and year

    	//sanatize the data
    	$date = preg_replace("([^0-9/])", "", $date);

    	//Get the two key data points, Month/Year
    	$month = date("m",strtotime($date));
    	$year = date("Y",strtotime($date));

    	




    }

    public static function scopeGetTwoRecentPosts(){
        return static::latest()->take(2)->get();
    }
    
    /*
    *
    *
    */
    public function getPostByDate($date){
    	//parse date to get 

    }
}
