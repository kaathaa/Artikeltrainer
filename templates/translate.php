<p class="result">
	Das italienische Wort für 
	<?php
	while($row = $statement->fetch()) {
		echo '<strong>'.$row['word_de'].'</strong>';
		echo ' ist ';
		echo '<strong>'.$row['word_it'].'</strong>';
	}
	?>
</p>
<a class="link_block" href="index.php">zurück</a>