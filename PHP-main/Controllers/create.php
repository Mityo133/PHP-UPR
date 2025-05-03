<?php
require base_path("backend/Validator.php");
$config = require base_path("backend/config.php");
$data = new Database($config['database']);
$userid = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $body = $_POST['body']; // Directly assigning the 'body' value from the form submission
    $errors = [];
    // Insert the new note into the database without validation
    if(Validator::string($body)){
        $errors['body']='A body is required';
    }
   if (strlen($body) > 300) {
    $errors['body'] = 'The body cannot be more than 300 characters.';
}
    if(empty($errors)){
        $data->getPdo("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $body,
            'user_id' => $userid
        ]);
    
        // Optionally redirect after successful insertion
       require base_path("Controllers/notes.php");
        exit();
    }
}

require base_path("views/notes/create.view.php");

?>