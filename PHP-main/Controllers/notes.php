<?php 

$config = require base_path("backend/config.php");
$data = new Database($config['database']);

$notes = $data->getPdo("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);

require base_path("views/notes/show.view.php");


?>