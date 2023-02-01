# Rapidmvc
PHP mvc framework for easy and rapid web development.

### Framework Directory Structure
```bash
Rapidmvc
│ 
├───app               # The core folder of mvc structure.
│   ├───controller
│   ├───model
│   └───view
│
├───bootstrap         # Contains the framework autoloader and bootstrap files.
│ 
├───cache             # Contains the framework cache files.
│   └───blade
│ 
├───config            # Contains the configuration files.
│ 
├───helpers           # Contains the framework helper functions.
│ 
├───public            # Contains web assets (js, css, images).
│   └───assets
│       ├───css
│       ├───images
│       └───js
│ 
├───routes            # Contain the router file.
│ 
├───services          # Contains the framework core services (classes).
│ 
├───storage           # Contains data and sessions storage.
│   └───data
│       ├───array
│       ├───json
│       └───sqlite
│   └───sessions
│ 
└───vendor            # Contains composer packages.
```