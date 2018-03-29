<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){

		//Query Builder Method
		//$tasks = DB::table('tasks')->latest()->get();	

		//Note: Because we are using a model, we must make sure we are importing it here
		$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    
    //Simplified version using Route Model Binding.
    //the variable $task must match the Route wild card call in the web.php file
    public function show(Task $task){
    	
    	//Return the view and the query. 
    	return view('tasks.show',compact('task'));
    }


  /**  
  		public function show($id){   

		// $task = Task::find($id);
  			return view('tasks.show', compact('tasks'));
		}
  **/   
}
