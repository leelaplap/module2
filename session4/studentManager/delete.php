<?php
$id = $_GET["id"];
include_once "StudentManager.php";
$listStudent = $manager->readFileJsonToArray();
array_splice($listStudent, $id, 1);
$manager->saveDataToJson($listStudent);

header("Location:display.php");