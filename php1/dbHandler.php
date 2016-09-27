<html>
	<head>
		</head>	
			<body>
				<form action="dbHandler.php" method="POST">
				<div class="db_form">	
					 <input type="text"  name="usr_input"  placeholder="database name"> <button type="submit" name="show_tables" value="show_tables">Show tables from databases</button>
				</div>
				<button type="submit" name="show_databases" value="show_databases">Show databases</button>
				<br/>
				<br/>
					<div class="db_form1">	
						 <input type="text"  name="usr_input1"  placeholder="table name"> 
					</div>
				<br/>
						<div class="db_form2">	
							 <input type="text"  name="usr_input2"  placeholder="column name"> <br/> 
								<button type="submit" name="show_columns" value="show_columns">Show columns from table</button>
						</div>
				<br/>
				<button type="submit" name="new_db" value="new_db">Create database</button>
				<button type="submit" name="drop_db" value="drop_db">Drop database</button>
				</form>
			</body>
</html>

<?php
	
	class Database_handler {
			private	$dbhost;
			private $dbuser;
			private	$dbpass;
			private $dbname;
			private $tablename;
	
	public function __construct($dbhost,$dbuser,$dbpass){
				$this->dbhost = $dbhost;
				$this->dbuser = $dbuser;
				$this->dbpass = $dbpass;
	}
	
	function db_connection_checker(){
		
		$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		
		if (!$connect) {
			echo "<h>FAILED TO CONNECT. TRY AGAIN</h>";
			return mysql_error();
		}
		
		echo "<br> Connected succesfully";
		
		mysql_close($connect);
	}
	
	function show_databases() {
		$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		$query = mysql_list_dbs($connect);
		$i = 0;	
		$cnt = mysql_num_rows($query);
		echo "<p>Databases</p>";
		while ($i < $cnt) {
			echo  mysql_db_name($query, $i)  . "<br>";
			$i++;
		}	
		mysql_close($connect);
}
	
	function create_database($dbname) {
		$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		$sql = "CREATE DATABASE " . $dbname;
		$query = mysql_query($sql , $connect);
			if ($query)
				echo $dbname . " database created";
			else
				echo "Something wrong ";
				
		mysql_close($connect);	
	}
	
	function drop_database($dbname) {
		$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		$sql = "DROP DATABASE " . $dbname;
		$query = mysql_query($sql , $connect);
			if ($query)
				echo $dbname . " database dropped";
			else
				echo "check database name or something else is wrong :>";
	}
		
	
	function show_tables_from_database($dbname) {
			if($dbname){
				$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
				$query = mysql_db_query($dbname, "show tables");
				$i = 0;	
				$cnt = mysql_num_rows($query);
				echo "<p>Tables</p>";
				while ($i < $cnt) {
					echo mysql_db_name($query, $i) . "<br>";
					$i++;
				}
			}
			else{
					echo "No db name detected";
				}
			
					mysql_close($connect);
			

}
	function show_columns_from_table($dbname,$tablename,$columnname){
		if (!$dbname)
			echo "Database name required";
			
			else if(!$tablename)
				echo "Table name required";
			
				else if(!$columnname)
					echo "Column name required";
					
					else if (!$dbname && !$tablename && !$columnname)
						echo "Please type all necesssary fields";
		else
			$connect = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
			$query = mysql_query("select * from" . $tablename);
		
	}


}	

				session_start();
				$host = $_SESSION['host'];
				$user = $_SESSION['user'];
				$pwd = $_SESSION['pwd'];
			
				$dbSession = new Database_handler($host,$user,$pwd);
		
			   if(isset($_POST["show_databases"])){
						  $dbSession = new Database_handler($_SESSION["host"],$_SESSION["user"],$_SESSION["pwd"]);
						  $dbSession -> show_databases();
				}
				else if(isset($_POST["show_tables"]) && isset($_POST["usr_input"])){
						  $dbSession = new Database_handler($_SESSION["host"],$_SESSION["user"],$_SESSION["pwd"]);
						  $usr_input = htmlspecialchars($_POST["usr_input"]);
						  $dbSession -> show_tables_from_database($usr_input);
							}
					else if(isset($_POST["usr_input"]) && isset($_POST["usr_input1"]) && isset($_POST["usr_input2"]) && $_POST["show_columns"] ){
								 $dbSession = new Database_handler($_SESSION["host"],$_SESSION["user"],$_SESSION["pwd"]);
								 $usr_input = htmlspecialchars($_POST["usr_input"]);
								 $usr_input1 = htmlspecialchars($_POST["usr_input1"]);
								 $usr_input2 = htmlspecialchars($_POST["usr_input2"]);
								}
						else if(isset($_POST["new_db"]) && $_POST["usr_input"]){
										$dbSession = new Database_handler($_SESSION["host"],$_SESSION["user"],$_SESSION["pwd"]);
										$usr_input = htmlspecialchars($_POST["usr_input"]);
										$dbSession -> create_database($usr_input);
									}
							else if(isset($_POST["drop_db"]) && $_POST["usr_input"]){
											$dbSession = new Database_handler($_SESSION["host"],$_SESSION["user"],$_SESSION["pwd"]);
											$usr_input = htmlspecialchars($_POST["usr_input"]);
											$dbSession -> drop_database($usr_input);
										}
		
				else {
					
					$dbSession = new Database_handler($host,$user,$pwd);
					$dbSession -> db_connection_checker();
					
					}	
?>
