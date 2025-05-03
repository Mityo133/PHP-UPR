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
<a class="btn-danger" href="/notes/show">Go back</a>
  <ul>
  <?php foreach ($note as $not): ?> 
       <li><?= $not['body'] ?></li>
  <?php endforeach;?>
</ul>
</body>
</html>