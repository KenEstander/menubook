<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

		case 'record-add' :
			record_add();
			break;

		case 'inquiry-add' :
			inquiry_add();
			break;


	default :
}


function inquiry_add()
{
	$model = inquiry();
	$model->obj["name"] = $_POST["name"];
	$model->obj["company"] = $_POST["company"];
	$model->obj["email"] = $_POST["email"];
	$model->obj["phone"] = $_POST["phone"];
	$model->obj["phone"] = $_POST["phone"];
	$model->obj["phone"] = $_POST["phone"];
	$model->obj["phone"] = $_POST["phone"];
	$model->obj["phone"] = $_POST["phone"];

	$model->create();

header('Location: index.php?success=Your inquiry will be added to our database');
}

function delete_records(){
	$userId = $_GET["userId"];
	record()->delete("userId=$userId");

	header('Location: delete-reset.php?success=You have successfully deleted all records');
}
