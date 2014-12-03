<?php

include 'Router.php';
echo 1;
$route=new Router();

$route->add('/',function(){
    echo "Hello World";
});

$route->add('/about',function(){
    echo "Hello about";
});


$route->run();