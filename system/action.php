<?
include 'functions.php';
//��������� ������ � ����
if(isset($_GET['add'])) {
	add($_POST['data']['text'], $project_id);
	//������� ���������� �������
	view($project_id);
}
if(isset($_GET['remove'])) {
	remove($_GET['id']);
	//������� ���������� �������
	view($project_id);
}