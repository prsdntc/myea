<?php
/*
define('SERVERNAME', 'localhost);
define('USERNAME', 'u998494756_myeast');
define('PASSWORD', '$ZaN]Z@Y0');
define('DATABASE', 'u998494756_eastside);

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);


//Check connection
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected sucessfully.";*/

error_reporting(0);
Class Database{

	private $server = "mysql:host=localhost;dbname=u998494756_eastside";
	private $username = "u998494756_myeast";
	private $password = '$ZaN]Z@Y0';
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;

	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "There is some problem in connection: " . $e->getMessage();
 		}

    }

	public function close(){
   		$this->conn = null;
 	}

}

$pdo = new Database();

?>