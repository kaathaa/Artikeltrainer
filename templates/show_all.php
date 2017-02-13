<table>
<tr>
	<th>Italienisch</th>
	<th>Artikel</th>
	<th>Deutsch</th>
	<th>Punkte</th>
</tr>
<?php
while($row = $statement->fetch()) {
	echo '<tr>';
	echo '<td>'.$row['word_it'].'</td>';
	echo '<td>'.$row['article'].'</td>';
	echo '<td>'.$row['word_de'].'</td>';
	echo '<td>'.$row['done'].'</td>';
	echo '</tr>';
}
?>
</table>
<a class="link_block" href="index.php">zurück</a>