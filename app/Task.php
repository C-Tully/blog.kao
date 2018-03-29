<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    ////Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can).
    
    // public static function iscomplete(){
    // 	
    // 	return static::where('completed', 0)->get();
    // }


		//Note: By setting the function as scope<Something> this allows for the call Task::incomplete();

		//E.G call would be Task::incomplete('false',)
	public  function scopeIncomplete($query){

	    //Return (run query)"query"-> where compelted is 0

    	return $query->where('compelted', 0)->get();
    }


}
