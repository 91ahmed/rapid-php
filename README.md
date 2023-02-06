# Rapidmvc
MVC framework for rapid development.

### Directory Structure
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

### View
To create view just go to view path ```app/view``` and create php file like the following example: ```viewname.blade.php```.
The file should have ```.blade``` because the framework use [Blade](http://laravel.com/docs/5.8/blade) template engine to make use of it's awesome features.
To read more about [Blade](http://laravel.com/docs/5.8/blade) to understand it's syntax the information can be found throug links below.

[Documentation](http://laravel.com/docs/5.8/blade)
[Repository](http://github.com/jenssegers/blade)