<?php

/*
 * -----------------------------------------------------------------------------
 * CONSTANTS
 * -----------------------------------------------------------------------------
 */

/*
 * Server
 */
define('SERVER', 'localhost');

/*
 * Username
 */
define('USERNAME', 'root');

/*
 * Password
 */
define('PASSWORD', '');

/*
 * Database
 */
define('DATABASE', 'inventory_system');

/*
 * Project Root
 */
define('PATH', "C:/wamp/www/Web-Based-Inventory-System/");

/*
 * Host
 */
define('HOST', "http://localhost/Web-Based-Inventory-System");

/*
 * Default Photo
 */
define('DEFAULT_PHOTO', PATH . "photos/default.png");

/*
 * -----------------------------------------------------------------------------
 * AUTOLOADERS
 * -----------------------------------------------------------------------------
 */

/*
 * Load classes from libs folder when a class instantiated
 */
function autoload_libs($class){
    
    if (file_exists(PATH."libs/$class.php")) {
        require_once PATH."libs/$class.php";
    }   
}

/*
 * Load classes from models folder when a model class instantiated
 */
function autoload_models($class){
    
    if (file_exists(PATH."models/$class.php")) {
        require_once PATH."models/$class.php";
    }
}

/*
 * Register all autoload functions
 */
spl_autoload_register('autoload_libs');
spl_autoload_register('autoload_models');

?>
