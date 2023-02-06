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
To create view just go to the views path ```app/view``` and create php file like the following example: ```viewname.blade.php```
The reasone why the file have ```.blade``` because the framework use [Blade](http://laravel.com/docs/5.8/blade) template engine to make use of it's features.

To read more about [Blade](http://laravel.com/docs/5.8/blade) the information can be found through the links below.

**Documentation** [http://laravel.com/docs/5.8/blade](http://laravel.com/docs/5.8/blade) <br/>
**Repository** [http://github.com/jenssegers/blade](http://github.com/jenssegers/blade) <br/>