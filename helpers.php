<?php

/**
 * Base Path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load view 
 * 
 * @param string $name
 * @return void
 */
function loadView($name) {
    $path = basePath("view/{$name}.view.php");

    if(file_exists($path)) {
        require $path;
    } else {
        die($path . " not found!");
    }
}

/**
 * Load partitions
 * 
 * @param string $name
 * @return void
 */
function loadPartition($name) {
    $path = basePath("view/partitions/{$name}.php");

    if(file_exists($path)) {
        require $path;
    } else {
        echo "{$path} not found!";
    }
}

/**
 * inspact a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspact($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

/**
 * Inspact and die 
 * 
 * @param mixed $value
 * @return void
 */
function inspactAndDie($value) {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}