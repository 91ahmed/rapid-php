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
├───cache             # Contains the system cache file.
│   └───blade
│ 
├───config            # Contains the configuration files.
│ 
├───helpers           # Contains the framework helper functions.
│ 
├───public            # Contains webpage assets (js, css, images).
│   └───assets
│       ├───css
│       ├───images
│       └───js
│ 
├───routes            # Contain the router file.
│ 
├───services          # Contains the framework core services.
│ 
├───storage           # Contains data and sessions storage.
│   └───sessions
│ 
└───vendor            # Contains composer packages.
```