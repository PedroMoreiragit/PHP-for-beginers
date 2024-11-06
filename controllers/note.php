<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$note = $db->query('SELECT * from notes where user_id = :id', ['id' => $_GET['id']])->fetch();

require "views/note.view.php";