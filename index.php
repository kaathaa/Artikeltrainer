<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'dbSql.class.php';
include 'article.class.php';

$article = new Article();
$article->get();
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="style.css">
			
		
		<script src="https://use.fontawesome.com/a639b24457.js"></script>
	
		<script type="text/javascript">
			function ChangeColorFirst () {
				first_button.style.backgroundColor = "#64B6AC";
			}
			function ChangeColorSecond () {
				second_button.style.backgroundColor = "#64B6AC";
			}
			function ChangeColorThird () {
				third_button.style.backgroundColor = "#64B6AC";
			}
		</script>

	</head>
	<body>
		<div class="wrapper">
	
			<h1>Artikeltraining</h1>
			<?php
			if(isset($_GET['translate'])){
				$article->translate();
			}elseif(isset($_GET['finish'])) {
				include __DIR__.'/templates/finish.php';
			}elseif(isset($_GET['showAll'])) {
				$article->showAll();
			} elseif (isset($_POST['submit'])) {
				$article->compare();
			} else {
				$article->showForm();
			};			
			?>
			
		</div>
	</body>
</html>
