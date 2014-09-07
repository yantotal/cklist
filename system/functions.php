<?
require_once 'library/meekrodb.class.php';
include('config.php');
//Добавление задачи в базу
function add($text, $project_id) {
	DB::insert("tasks", array(
		"text" => $text,
		"status" => 0,
		"project_id" => $project_id,
	));
}
//Отметка задачи выполненной
function remove($task_id) {
	DB::update('tasks', array(
		'status' => 1),
		"id=%i", $task_id);
}
//Вывод таблицы
function view($project_id) {
	$results = DB::query("SELECT * FROM tasks WHERE project_id = %i ORDER BY  `tasks`.`status` ASC, `tasks`.`date` DESC ", $project_id);
	$table = '';
	foreach ($results as $row) {
		echo '<tr>
			<td class="lalign">'.rdate("d M", $row['date']).'</td>
			<td>'.$row['text'].'</td>
			<td><input type="checkbox" name="status" data-id="'.$row['id'].'" '.(($row['status'] == 0)?" ":"disabled checked ").'></td>
			</tr>';
	}
}
//Получаение информации о проекте
function info ($project_id, $name) {
	$results = DB::query("SELECT * FROM projects WHERE id = %i", $project_id);
	echo $results[0][$name];
}
//Русские даты
function rdate($param, $time=0) {
	if(intval($time)==0)$time=time();
	$MonthNames=array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");
	if(strpos($param,'M')===false) return date($param, $time);
		else return date(str_replace('M',$MonthNames[date('n',$time)-1],$param), $time);
}
?>