<?php
function autoload($class) {
    include 'controllers/'.$class.'.php';
}

spl_autoload_register('autoload');