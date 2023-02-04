# Rapidmvc
PHP mvc framework for easy and rapid web development.

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
├───services          # Framework core classes.
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