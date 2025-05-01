<?php


function abort($code = 403) {
    // Set the HTTP response code based on the $code passed
    http_response_code($code);

    // Include the corresponding error view dynamically based on the $code
    require "views/{$code}.view.php";

    // Stop the script after the response
    exit();
}
 function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
  }
  function base_path($path){
           return BASE_PATH.$path;
  }
?>