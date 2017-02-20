<form method="post" action="">
	<div class="articles">
		<button type="submit" name="der">der</button>
		<button type="submit" name="die">die</button>	
		<button type="submit" name="das">das</button>	
		
		<input type="hidden" name="article" value="<?php echo $article->getArticle(); ?>">
		<input type="hidden" name="word_de" value="<?php echo $article->getWordDe(); ?>">
		<input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
		<p class="word_de"><?php echo $article->getWordDe(); ?></p>
	</div>	
	
</form>		
	<?php require __DIR__.'/icons.php'; ?>