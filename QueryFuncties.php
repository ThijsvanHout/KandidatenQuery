<?php
//moet meegeven worden voor de json data
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host ="localhost";
$database = "kandidaten";
$user= "admin";
$pass= "123";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query("SELECT functie_id, functie_naam  FROM functie");
//$result = $conn->query("SELECT *  FROM user");

//maak JSON data aan, eerst [
$outp = "[";
//tussen {} de betreffende data zetten, datavelden scheiden met ,
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"FunctieId":"'  . $rs["functie_id"] . '",';
    $outp .= '"FunctieNaam":"'   . $rs["functie_naam"]        . '"}';
}
//sluit af met ]
$outp .="]";

$conn->close();
//dmv echo wordt de JSON data teruggegeven
echo($outp);
?>

