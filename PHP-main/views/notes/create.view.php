<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
</head>
<?php require base_path('views/partials/buttons.php'); ?>
<body>
    <h1>Add Items</h1>
        <form method="POST" action="/create">
        <label for="body">Note text</label>
        <div><textarea name="body" id="body" cols="30" rows="10" ></textarea>
        <?php if(isset($errors['body'])): ?>
        <strong><p class="text-danger"><?= $errors['body']?><?php endif?></p></strong></div>
        <button type="submit">Create</button>
    </form>
            
</body>
</html>