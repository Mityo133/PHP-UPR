<?php 

$config = require base_path("backend/config.php");
$data = new Database($config['database']);
$id = $_GET['id'];
$user = 1;
$note = $data->getPdo("SELECT * FROM notes WHERE user_id = :user AND id = :id", [
    'user' => $user,
    'id' => $id
])->fetchAll(PDO::FETCH_ASSOC);

if (!$note) {
    http_response_code(403);
    require "views/403.view.php";
    exit();
} if ($user !== 1)
       {
      http_response_code(403);
    require "views/403.view.php";
    exit();
}
require base_path("views/notes/note.view.php");
?>