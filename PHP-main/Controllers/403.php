<?


    http_response_code($code);
    require view("views",[
     'heading' => '403',
]); // Corrected path and dynamic based on $code
  


?>