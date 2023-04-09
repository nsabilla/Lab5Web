<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_GET["nim"])) {
    $database->delete("tb_lab5web", "where nim=" . $nim);
    header("Location: home");
}
