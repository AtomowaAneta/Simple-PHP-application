<?php
class Database_handler
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "ykmd6y2y";
    private static $db_name = "app_db";
    private $name;
    private $sname;
    private $pwd;
    private $nick;
    private $age;
    private $mail_addr;
    public function __construct($name, $sname, $pwd, $nick, $age, $mail_addr)
    {
        $this->name      = $name;
        $this->sname     = $sname;
        $this->pwd       = $pwd;
        $this->nick      = $nick;
        $this->age       = $age;
        $this->mail_addr = $mail_addr;
    }
    function create_user()
    {
       $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        
        $sql    = "INSERT INTO Users (FirstName, LastName, Password, Nick, Age, Mail_addr) VALUES('$this->name','$this->sname','$this->pwd','$this->nick','$this->age','$this->mail_addr')";
        $result = $conn->query($sql);
    }
    
    function create_user_db() 
    {
		$conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
			$usrdb = $this->name . $this->nick . "_db";
			$sql    = "CREATE DATABASE " . $usrdb;
			$result = $conn->query($sql);
			create_tables_in_db($usrdb);
		
	}
	
    public static function find_user($name, $pwd)
    {
        $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "SELECT FirstName, Password FROM Users WHERE FirstName='$name'and Password='$pwd'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function display_user($name) 
     {
        $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "SELECT Nick FROM Users WHERE FirstName='$name'";
        $result = $conn->query($sql);
       
   
          while ($row = $result->fetch_row()) {
			return $row[0];
    }
    }

    public static function get_all_users(){
         $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Nick FROM Users";
        $result = $conn->query($sql);
           
            if ($result->num_rows > 0) {
            // output data of each row
           return $result;
           
        } else {
            echo "0 results";
        }
        $conn->close();

    }
} 



			

