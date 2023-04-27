<?php
$heading = 'My Notes';

$config = require("config.php");

$db = new Database($config['database'], 'brownwolf', 'password');


$id = $_GET['id'];

$query = "select * from notes where user_id = :user and id = :id";
$note = $db->query($query, ['id' => $id, 'user' => 1])->fetchAndAbort();

require './views/note.view.php';