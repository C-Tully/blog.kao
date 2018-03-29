###############################################################                  USEFUL COMMANDS                   ###
###########################################################




Controllers:
	- Routing with a controller in mind -> E.G: Route::get('/<route>','ControllerName@function');
	- Located in App/Http/Controllers
	- Creating with a generator (short cut!)
		- E.G php artisan make:controler <name>




Theory:: Route Model Binding
	- When injecting a model ID to a route or controller action, you will often query to retrieve the model that corresponds to that ID. Laravel route model binding provides a convenient way to automatically inject the model instances directly into your routes. For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.
Theory::Query Scopes.
	- shortening a query call to a specific method call, and there by allowing it to be called as a standard call such as a get(); call.



php artisan migrate
	- Runs all the migrations files in the /migrations folder.
NOTE:: Made a change to the migrate schema? Make sure to run refresh
php artisan migrate:refresh
	- Refreshs the migration tables



php artisan make:model <name> 

 - Creates a semi empty model located under the site/app directory.

 - Short cut: Creating a Migration and creating the elequoent model at the same time
	-E.G php artisan make:model <modelName> -m

 - Short cut: Creating a Migration and creating the elequoent model and controller the same time
	-E.G php artisan make:model <name> -mc(migration and controller)

- Dump composer Cache
	- E.G composer dump-autoload





 php artisan Tinker

 - Boots up a interactice shell, used to... interact with the application
 	While in Tinker Mode
 		- App\<model>::all()
 			- Calls all the models functions.
 		- Querying the functionality
 			- E.G App\Task::where('id','>',2)->get();
 		- Querying the functionality::Get specific element/collection of <object>/<model> ( these calls may be called without creating a object of the model)
 			- E.G App\Task::pluck('<element>');
 			- E.G Get Collections helper methods. 
 				$task = App\Task::pluck('<element>')->first();
 			- E.G Get the first record.
 			$task = App\Task::first();
 		- Call a instant of the object/class and reference it's functionality.
 			- E.G $task = App\Task;
 				$task->functionCall();