<?php
require_once(".\connection.php");
function getdate($table)
{
    global $conn;
    $query = "SELECT * FROM" $table";
    $q = mysqli_query($conn, $query);
    $arr = mysqli_fetch_array($q);
    // format data
    $json = json_encode($arr);
    //print($json);

}

funtion setDate($table, $data)
{
    global $conn;
    $fields = "";
    $values = "";
    foreach($key as $key => $value)
    {
        $fields = $fields. ",";
        $values = $values."\"".$value."\"". ",";
    $fields = strim($fields,',');
    $values = strim($values,',');
    $query = "INSERT INTO $table (ci, nombres, apellidos)
    VALUES ('$data[ci]','$data[nombres]','$data[apellidos]');";
    try
    {
        $q = mysqli_query($conn, $query);
    }
    catch(Exception $e)
    {
        print("Error Query");
        return;
    }
}
?>
//Examen este martes los 4 operadores.
