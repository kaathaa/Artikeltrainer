		
		<form method="post" action="">
			<div class="articles">
				<div id="first_button" onclick="ChangeColorFirst()" class="form_group button">
					<input type="radio" name="gender" id="male" value="der">
					<label for="male">der</label>
				</div>				
				<div id="second_button" class="form_group button" onclick="ChangeColorSecond()">
					<input type="radio" name="gender" id="female" value="die">
					<label for="female">die</label>
				</div>
				<div id="third_button" class="form_group button" onclick="ChangeColorThird()">
					<input type="radio" name="gender" id="it" value="das">
					<label for="it">das</label>
				</div>
				<input type="hidden" name="article" value="<?php echo $article->getArticle(); ?>">
				<input type="hidden" name="word_de" value="<?php echo $article->getWordDe(); ?>">
				<input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
				<p class="word_de"><?php echo $article->getWordDe(); ?></p>
			</div>
			<input type="submit" class="button" name="submit" value="Check">	
	
			<?php require __DIR__.'/icons.php'; ?>
		</form>
		