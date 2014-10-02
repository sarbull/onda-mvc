onda-mvc
========

## Features
 - [ActiveRecord ORM library.](http://www.phpactiverecord.org/)
 - [REST design with AltoRouter system.](https://github.com/dannyvankooten/AltoRouter)

## Details
My implementation of a simple MVC in PHP.

## Quick start

You can start by creating your config.php file in the /config/ folder, there you will find a config.php.txt that can be used.

The root '/' route is currently set on the 'Welcome' controller found in /app/controllers/Welcome.php. You can see the routes in /config/routes.php.

To continue, you can generate a controller with the command:

````bash
$ php generate/controller.php users user
````

'users' stands for the controller's name and 'user' for the controller's model name.

You can also generate models with the following command:

````bash
$ php generate/model.php user users field1:int:11 field2:decimal:5,2 field3:varchar:40
````

The first 'user' is the name of the model and the second 'users' is the multiplied name of the db table that will be generated in /db/migrations/.

## File structure
1. app/
 - controllers/
   - Welcome.php
 - models/
   - User.php
 - views/
   - layout/
      - footer.php
      - header.php
      - page.php
   - welcome/
     - index.php
2. config/
 - config.php.txt
 - routes.php
3. db/
 - migrations/
4. generate/
 - controller.php
 - model.php
5. libs/
 - php-activerecord/
 - Redirect.php
6. public/
 - css/
 - img/
 - js/
 - uploads/
7. system/
 - ActiveRecord.php
 - AltoRouter.php
 - Application.php
 - Controller.php
 - View.php
8. .htaccess
9. index.php

## Contributing
- Fork it
- work on that feature branch
- push changes
- create Pull Request
