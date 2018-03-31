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

Logic:: Form Submitting
	- Laracasts incorporates a hidden (mandatory) field that has a session token that is required to process form submisison data. Make sure to call the standard {{ csrf_field() }} in the blade in question.
Logic:: Bulk Saving Form Data
	- If bulk saving form data be sure to add a protected fillable = ['<acceptable fields>'] to the model. This allows acceptance for those variables only.
	- If bulk saving and you want to exclude fields you can do a protected guarded = ['<blocked fields>']
	ShortCut: By creating a parent class you can set these properities as a inherited feature for all children classes.  Create a new Model -> App/Model.php
Logic: $errors
	- The $errors is a global object that is available to all views.


*****************************************************************
*****   Useful Code Snippets 					  ***************
*****************************************************************
{{ csrf_field() }}
Creates the mandatory token for form submissions. Server will reject form submissions without a correct token.


{{ method_field(:'PATH') }}
 Used in form deployment. Due to old technology form methods such as PATCH or DELETE 



*****************************************************************
*****   Useful commands for the terminal/cmd line ***************
*****************************************************************

(With Node and Node Installed )

 npm run <name>

 npm run dev
 	Set environment to dev (compiles down files set in the webpab.mix file and sets them to a specific area.)

npm run watch
	Watches for changes in the app.css/.js files and recomiles.

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

 - Short cut: Creationg a Form Controller. This creates a full controller with a template for standard CRUD implementantions
 	E.G php artisan make:controller <name> -r

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