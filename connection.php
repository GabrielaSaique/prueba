<?php
    $host = "localhost";
    $userDB = "root";
    $passDB = "";
    $conn = mysqli_connect($host,$userDB,$passDB);
    if ($conn) {
        print "Conexion Exitosa";
    }
    else{
        print "Error Conexion";
    }

/*$DBname = "test";
$db = mysqli_select_db($conn, "test");
if($db){
    print "Conexion DB Exitosa";
}
else{
    print "Error Conexion DB";
}
$query = "SELECT * FROM persona";
$q = mysqli_query($conn,$query);
print"<table border>";
print "";
while($row = mysqli_fetch_array($q)){
    print $row[0] ."<br>";
    print $row[1] ."<br>";
    print $row[2] ."<br>";
    print $row[3] ."<br>";
}   
print "</table>";
?>

$dbName = "test";
try
{
$db = mysqli_select_db($dbName)
}
catch(Exception $e)
{
        print("Error DB")*/

