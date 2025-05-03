<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path("backend/route-list.php");



if (array_key_exists($uri, $routes)) {
    require base_path($routes[$uri]);
} else {
   require base_path("Controllers/404.php"); // Corrected path and dynamic based on $code
}
?>
