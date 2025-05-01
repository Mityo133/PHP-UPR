<?php
require "Validator.php";
$config = require "backend/config.php";
$data = new Database($config['database']);
$userid = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $body = $_POST['body']; // Directly assigning the 'body' value from the form submission
    $errors = [];
    // Insert the new note into the database without validation
    if(Validator::string($body)){
        $errors['body']='A body is required';
    }
    if(Validator::len($body)){
        $errors['body']='The body cannot be more than 300';
    }
    if(empty($errors)){
        $data->getPdo("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $body,
            'user_id' => $userid
        ]);
    
        // Optionally redirect after successful insertion
        header('Location: /notes'); // Redirect to the list of notes
        exit;
    }
}

require base_path("views/notes/create.view.php");

?>