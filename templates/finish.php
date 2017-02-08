<?php
if(isset($_SESSION['rightAnswer']) && isset($_SESSION['allAnswers'])) {
	echo '<p class="result">'.$_SESSION['rightAnswer'].' von '.$_SESSION['allAnswers'].' Antworten richtig.</p>';
} else {
	echo '<p class="result">Du hast noch keine Frage beantwortet.</p>';
} ?>
<a class="link_block" href="index.php">LINK URL AUSTAUSCHEN!!!</a>
	
	
