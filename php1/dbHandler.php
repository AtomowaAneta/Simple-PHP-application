 <?php
class Database_handler
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
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
        $stmt = $conn->prepare("INSERT INTO users (FirstName, LastName, Password, Nick, Age, Mail_addr)
VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssis", $this->name, $this->sname, $this->pwd, $this->nick, $this->age, $this->mail_addr);
        $stmt->execute();
    }
    public static function find_user($name, $pwd)
    {
        $conn = new mysqli(Database_handler::$servername, Database_handler::$username, Database_handler::$password, Database_handler::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "SELECT FirstName, Password FROM users WHERE FirstName='$name'and Password='$pwd'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
} 
