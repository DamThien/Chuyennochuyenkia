<?php
require_once("./database.php");
$db = new Database();
if (!$db) {
    echo "Failed to connect to the database. Error: " . $db->error;
} else {
    echo "Connected to the database successfully.";
}