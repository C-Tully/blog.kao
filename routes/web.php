<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Import Class for Global use.
// use App\Task;
use App\BlogPosts;


//Traditionally for this type of instantion you will need...
	/**
		Controller => PostsControler

		Eloquent Model => Singular form A noun :: Post
		
		Migration => create_posts_table
	**/

	//Make all the required using an artisan command
	// php artisan make:model <name> -mc(migration and controller)
	Route::get('/','BlogPostsController@index');
	Route::get('/Post/{next_post_date}','BlogPostsController@getSingleBlogPost');

// Route::get('/','PostsController@index');

// Route::get('/posts/{post}','PostsController@show');




//Routing with Controller Logic
// Route::get('/task','TasksController@index');
// Route::get('task{task}','TaskController@show');




// Route::get('/about', function () {
//         return view('about');
// });



/**
	//Allows you to pass variables from the controller to the view.
	// Route::get('/', function () {
	// 	return view('welcome')->with('name','World');
	// });

	// Route::get('/', function () {
	//     return view('welcome', [
	//     	'name' => 'World'
	//     ]);
	// });
**/

// Route::get('/', function () {

// 	//Pulling variables from the database
// 	//Laravel Query builder functionallity
// 	//E.G
// 	//Produces SQL Statement GET ALL FROM TABLE ORDER BY LATEST
// 	 //$tasks = DB::table('table')->latest()->get()
// 	$tasks = DB::table('tasks')->get();


// 	//Note: Returning a raw set of database records can be formatted automatically by laravel into a JSONobject and printed to screen.
// 	//return $tasks;

// 	// //Assigning Variables to be passed (hard coded)
// 	// $tasks = [
// 	// 	'Go to the store',
// 	// 	'Watch my Kids',
// 	// 	'Clean the house'
// 	// ];

//     return view('welcome', compact('tasks'));
// });

/**DEPRICATED:: Logic move to controller
	//Creating a route for a specific task]
	//Note: Anything within the {} is a wild card which is then passed to the function declaration as the $id variable
	// Route::get('/tasks/{task}', function ($id) {
	// 	//die and dump
	// 	//dd($id);

	// 	//Query builder method.
	// 	//Getting Tasks by Database call and querying for a specific (in this case) id.
	// 	//$tasks = DB::table('tasks')->find($id);
	// 	//dd($tasks);

	// 	//Calling all tasks using Eloquent //
	// 	// See 
	// 	//https://laravel.com/docs/5.6/eloquent#eloquent-model-conventions
	// 		//Name space referencing
	// 			//$task = App\Task::find($id);

	// 	$task = Task::find($id);

	//     return view('tasks.show', compact('tasks'));
	// });
**/

/**Depricated and logic move to controller.
	// Route::get('/tasks', function () {	

	// 	//Query Builder Method
	// 	//$tasks = DB::table('tasks')->latest()->get();	

	// 	//Eloquent Method
	// 	$tasks = App\Task::all();



	//     return view('tasks.index', compact('tasks'));
	// });
**/
