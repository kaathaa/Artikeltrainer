<?php
class Article
{
	protected $db;
	protected $article;
	protected $word_de;
	protected $word_it;
	public $id;
	protected $done;
	protected $counter = 0;

	public function __construct() {
		$this->db = dbSql::getInstance();
	}

	public function get() {
		$statement = $this->db->prepare('SELECT id, article, word_de, word_it, done
										FROM articles WHERE done <= 10 ORDER BY RAND()');
		$statement->execute();
		$data = $statement->fetch(PDO::FETCH_ASSOC);
		$this->article = $data['article'];
		$this->word_de = $data['word_de'];
		$this->word_it = $data['word_it'];
		$this->id = $data['id'];
		$this->done = $data['done'];
	}

	public function getArticle() {
		return $this->article;
	}

	public function getWordDe() {
		return $this->word_de;
	}

	public function getWordIt() {
		return $this->word_it;
	}

	public function getId() {
		return $this->id;
	}
	
	public function compare() {
		if(isset($_POST['gender'])) {
		if($_POST['gender'] === $_POST['article']) {
			$article = new Article();
			$article->count();
			$article->countRightAnswer();
			require __DIR__.'/templates/result_right.php';
		} else {
			$article = new Article();
			require __DIR__.'/templates/result_wrong.php';
		}
		$article->countAllAnswers();
		$article->showForm();
		$this->id = $_POST['id'];
		return $this->id;		
		} else {
			echo '<p class="result">
				Bitte wähle einen Artikel aus
				<a class="link_block" href="index.php">zurück</a>
				</p>';
		}
	}	

	public function translate() {
		$id = $_GET['id'];	
		$statement = $this->db->prepare("SELECT word_de, word_it FROM articles WHERE id = ?");
		$statement->execute(array($id)); 
		require __DIR__.'/templates/translate.php';	
	}	
	
	protected function countRightAnswer() {
		$_SESSION['rightAnswer']++;
		}

	protected function countAllAnswers() {
		$_SESSION['allAnswers']++;
	}

	protected function count() {
		$statement = $this->db->prepare("UPDATE articles SET done = done+1 WHERE id = :id");
		$statement->execute(array('id' => $_POST['id']));
	}

	public function showForm() {
		$article = new Article();
		$article->get();
		require __DIR__.'/templates/form.php';
	}
	
	public function showAll() {
		$statement = $this->db->prepare('SELECT article, word_de, word_it, done FROM articles ORDER BY done DESC');
		$statement->execute();
		require __DIR__.'/templates/show_all.php';
	}
	
}
