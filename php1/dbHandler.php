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
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $stmt = $conn->prepare("INSERT INTO Users (FirstName, LastName, Password, Nick, Age, Mail_addr) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis", $this->name,$this->sname,$this->pwd,$this->nick,$this->age,$this->mail_addr);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
    
 
	
   public static function find_user($name, $pwd)
    {
        $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
         if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $stmt = $conn->prepare("SELECT FirstName, Password FROM Users WHERE FirstName=? and Password=?");
        $stmt->bind_param("ss", $name,$pwd);
        $stmt->execute();
        $stmt->bind_result($name, $pwd);
        $stmt->fetch();
        return $stmt;
        $stmt->close();
        $conn->close();

     
    }


    public static function display_user($name) 
     {
        $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "SELECT Nick FROM Users WHERE FirstName='$name'";
        $result = $conn->query($sql);
        $conn->close();
   
          while ($row = $result->fetch_row()) {
            return $row[0];
    }

    }


    public static function become_logged_in($name){
      $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
         if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        $stmt = $conn->prepare("UPDATE Users SET Session='t' WHERE FirstName=?");
        $stmt->bind_param("s",$name);
        $stmt->execute();
        $stmt->close();
        $conn->close();

    }




        public static function become_logged_out($name){
            $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
             if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            $stmt = $conn->prepare("UPDATE Users SET Session='f' WHERE FirstName=?");
            $stmt->bind_param("ss",$flag,$name);
            $stmt->execute();
            $stmt->close();
            $conn->close();
    }



    public static function get_all_active_users() {
         $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
             if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            $sql = "SELECT Nick FROM Users WHERE Session='t'";
            $result = $conn->query($sql);
           


              if ($result->num_rows > 0) {
            // output data of each row
           return $result;
           
        } else {
            echo "0 results";
        }
        $conn->close();


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



			

