onda-mvc
========

# Features
 - [ActiveRecord ORM library.](http://www.phpactiverecord.org/)
 - [REST design with AltoRouter system.](https://github.com/dannyvankooten/AltoRouter)

# Details
My implementation of a simple MVC in PHP.

# Config
Just create a new config.php out of config/config.php.txt and configure it as you need.

# File structure
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
3. libs/
 - php-activerecord/
4. public/
 - css/
 - img/
 - js/
 - uploads/
5. system/
 - ActiveRecord.php
 - AltoRouter.php
 - Application.php
 - Controller.php
 - View.php
6. .htaccess
7. index.php
