<?php



//include 'autoloader.php';

function loadClasses($class) {
 $path = 'classes/';
 require_once  $path . $class .'.php';
}


function loadTraits($class) {
 $path = 'traits/';
 require_once  $path . 'testTraits.php';
}


spl_autoload_register('loadClasses');
//spl_autoload_register('loadTraits');

include 'traits/testTraits.php';






$step = new Step;
echo $step->initial_imports();








 ?>
