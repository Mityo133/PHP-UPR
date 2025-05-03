<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php require base_path('views/partials/buttons.php'); ?>
<body>
     
          
          <p>Welcome you are on main page</p>
           <?php foreach ($filterd as $car): ?>
               <h1><?php echo $car["model"]; ?></h1>
           <?php endforeach; ?>

 
</body>
</html>