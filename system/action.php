<?
include 'functions.php';
//Добавляем задачу в базу
if(isset($_GET['add'])) {
	add($_POST['data']['text'], $project_id);
	//выводим обновленую таблицу
	view($project_id);
}
if(isset($_GET['remove'])) {
	remove($_GET['id']);
	//выводим обновленую таблицу
	view($project_id);
}