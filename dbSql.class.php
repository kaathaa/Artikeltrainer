<?php

class dbSql {
	
	static public $db_obj = null;
	static private $objekt;

	private function __construct() {
		require __DIR__.'/config.php';
		$con = 'mysql:dbname=' . $name . ';host=' . $host;

	    try{
            self::$db_obj = new PDO ($con, $user, $pw, array
                                        (PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
                                    );
        }
		catch(PDOException $e){
            printf('Fehler beim Öffnen der Datenbank.',
            $e->getMessage); exit();
        }
    }

    public static function getInstance () {
		if(self::$db_obj === null)
			self::$objekt = new dbSql;
			return self::$db_obj;
        }

}


















/*
require __DIR__.'/config.php';
class dbSql {
	//private $host='localhost', $user='root', $pw='', $name= 'artikel';
	//private $host='localhost', $user='alle-meine-tests', $pw='MaariaA9', $name= 'alle-meine-tests';
	
	static public $db_obj = null;
	static private $objekt;

	private function __construct() {
		
		$con = 'mysql:dbname=' . $this->name . ';host=' . $this->host;

	    try{
            self::$db_obj = new PDO ($con, $this->user, $this->pw, array
                                        (PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
                                    );
        }
		catch(PDOException $e){
            printf('Fehler beim Öffnen der Datenbank.',
            $e->getMessage); exit();
        }
    }

    public static function getInstance () {
		if(self::$db_obj === null)
			self::$objekt = new dbSql;
			return self::$db_obj;
        }

}
*/