
  
  
<?php

   $books=[
   ["model"=>"BMW","country"=>"Germany"],
   ["model"=>"Mercedes","country"=>"Germany"],
   ["model"=>"Toyota","country"=>"Japan"],
   ["model"=>"Honda","country"=>"Japan"],
   ["model"=>"Ford","country"=>"USA"],
   ["model"=>"Chevrolet","country"=>"USA"]
   ];
   
    $filterd = array_filter($books, function($car){
      return $car['country'] === "USA";
   });
   $heading = "Home";
 

 require base_path("views/index.view.php");
 
?>
  