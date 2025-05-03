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
<ul>
   <?php foreach ($notes as $note): ?> 
   <li>
         <a href="/notes/note?id=<?=$note['id']?>" class="text-blue:"><?=$note['body']?></a>
   </li>

   <?php endforeach;?>
   </ul>
   <p>
      <a href="/notes/create">Click here to add items</a>
   </p>
</body>
</html>