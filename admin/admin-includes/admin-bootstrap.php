<?php
/**
 * Created by PhpStorm.
 * User: Nikhil Ghind
 * Date: 08-02-2019
 * Time: 09:58 AM
 */


define("MAX_NUMBER",5);
   define("BASEURL","http://localhost/oop-blog/");
   define("LAYOUT",BASEURL."admin/");


require_once("../classes/Helper.class.php");
require_once("../classes/Database.class.php");
require_once("../classes/Posts.class.php");
require_once ("../classes/Categories.class.php");
require_once ("../classes/Session.class.php");
require_once ("../classes/Authentication.class.php");
spl_autoload_register(function($class_name){

    include BASEURL."classes/".$class_name.'.class.php';
});
