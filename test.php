<?php
session_start();

$id = $_SESSION["id"];
$convert = (int)$id["id"];
var_dump($convert);
