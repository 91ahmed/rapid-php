# Rapidmvc
MVC framework for rapid development.

### # Directory Structure
```bash
Rapidmvc
│ 
├───app               # MVC structure.
│   ├───controller
│   ├───model
│   └───view
│
├───bootstrap         # Autoloader file.
│ 
├───cache             # System cache.
│   └───blade
│ 
├───config            # Configuration files.
│ 
├───core              # Framework core classes.
│
├───helpers           # Helpers functions.
│ 
├───public            # Web assets (js, css, images).
│   └───assets
│       ├───css
│       ├───images
│       └───js
│ 
├───routes            # Web routes.
│ 
├───storage           # Data and sessions storage.
│   └───data
│       ├───array
│       ├───json
│       └───sqlite
│   └───sessions
│ 
└───vendor            # Composer packages.
```

### # Models
Rapidmvc provides a simple data access layer that just works no matter what relational database you're using. but before you start useing models you should specify your database information in the configuration file located in this path ```config\app.php``` .

``` php
	// Database
	'db_driver' => 'mysql',
	'db_host' => 'localhost',
	'db_name' => 'test',
	'db_user' => 'root',
	'db_password' => '',
	'db_port' => 3306,
	'db_charset' => 'utf8',
	'db_sslmode' => 'disable' // disable - require
```

##### # Create Model
The framework store model files in ```app/model``` folder, all you need is to create php file in this folder with the database table name like this ```User.php``` .

The model file must have ```App\Model``` namespace and extend Model class and also must have ```$table``` property to specify the table name like the example below:
``` php
namespace App\Model;

use Core\Db\Model;

class User extends Model
{
	protected static $table = 'users';
}
```

##### # How to Use Model
Just use the namespace ```App\Model\YourModelName``` in the controller like the following example:
``` php
namespace App\Controller;

use App\Model\User;

class HomeController
{
	
	public function index ()
	{
		$users = User::execute()->all()->get();

		return view('home', compact('users'));
	}
}
```

### # Views
To create view just go to the views path ```app/view``` and create php file with ```.blade``` like the following example: ```viewname.blade.php```
The reasone why the file has ```.blade``` with the name because the framework use [Blade](http://laravel.com/docs/5.8/blade) as a **template engine** to make use of it's awesome features.

To read more about [Blade](http://laravel.com/docs/5.8/blade) the information can be found through the links below.

**Documentation** [http://laravel.com/docs/5.8/blade](http://laravel.com/docs/5.8/blade) <br/>
**Repository** [http://github.com/jenssegers/blade](http://github.com/jenssegers/blade) <br/>