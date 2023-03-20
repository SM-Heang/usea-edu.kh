<?php
  spl_autoload_register('myAutoLoad');
  function myAutoLoad($classname){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $classname . $extension;

    if(!file_exists($fullPath)){
      return false;
    }
    include_once $fullPath;
  }
?>