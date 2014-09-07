<? include 'system/action.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><? info ($project_id, 'name'); ?> - список задач</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css?v=<? echo rand(); ?>">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px"><? info ($project_id, 'name'); ?></h1>
			<h5>Список задач</h5>
			<hr />
		</div>
		<div class="ten  columns">
			<table cellspacing="0" cellpadding="0">
				<thead>
				  <tr>
					<th><span>Дата</span></th>
					<th><span>Задача</span></th>
					<th><span>Статус</span></th>
				  </tr>
				</thead>
				<tbody>
				  <? view($project_id); ?>
				</tbody>
			  </table>
		</div>
		<div class="six  columns">
			<h3>Добавить задачу</h3>
			<form method="POST" id="add" action="javascript:void(null);" onsubmit="add()">
				<input type="hidden" name="action" value="1">
				<label for="text">Описание</label>
				<textarea id="text" name="data[text]" required></textarea>
				<button type="submit">Добавить</button>
			</form>
		</div>
		<div class="sixteen columns footer">
			<hr />
			<div class="copyrights">© <a href="mailto:yan.total.all@gmail.com">Станислав Швайко</a>, 2014</div>
		</div>
	</div><!-- container -->


<!-- End Document
================================================== -->
<!-- JS
================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="javascript/main.js?v=<? echo rand(); ?>"></script>
</body>
</html>