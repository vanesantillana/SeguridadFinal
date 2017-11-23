<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

$txtid=$_POST["id"];

$mysqli = new mysqli("localhost", "my_user", "my_password", "test");

$consulta="SELECT id,name,position FROM user where id=".$txtid;


//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password,"seguridad") 
 or die("No Connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db("seguridad",$dbhandle) 
  or die("No connect seguridad");


//execute the SQL query and return records
$result = mysqli_query();

//fetch tha data from the database 
while ($row = mysqli_fetch_array($result)) {
   echo "ID:".$row{'id'}." Nombre:".$row{'name'}."Cargo: ". //display the results
   $row{'position'}."<br>";
}
/* devuelve el nombre de la base de datos actualmente seleccionadae */
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}

$mysqli->close();
//close the connection
mysql_close($dbhandle);
?>