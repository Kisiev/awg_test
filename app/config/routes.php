<?php
$router = new \Phalcon\Mvc\Router();

$router->setUriSource($router::URI_SOURCE_SERVER_REQUEST_URI);
return $router;

?>