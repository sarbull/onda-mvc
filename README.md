onda-mvc
========

## Features
 - [ActiveRecord ORM library.](http://www.phpactiverecord.org/)
 - [REST design with AltoRouter system.](https://github.com/dannyvankooten/AltoRouter)

## Details
My implementation of a simple MVC in PHP.

## Config
Just create a new config.php out of config/config.php.txt and configure it as you need.

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
3. generate/
 - controller.php
4. libs/
 - php-activerecord/
 - Redirect.php
5. public/
 - css/
 - img/
 - js/
 - uploads/
6. system/
 - ActiveRecord.php
 - AltoRouter.php
 - Application.php
 - Controller.php
 - View.php
7. .htaccess
8. index.php

## Contributing
- Fork it
- work on that feature branch
- push changes
- create Pull Request
