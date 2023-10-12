<?php 
   header('Access-Control-Allow-Origin: *');
   header('Content-type: application/json');

   $mysqli = new mysqli('localhost', 'root', 'penis', 'friends');
   $letters = $mysqli->real_escape_string($_GET["data"]);
   $sql = "SELECT name FROM friend WHERE name LIKE '$letters%'";
   $result = $mysqli->query($sql);
   $ret = $result->fetch_all(MYSQLI_ASSOC);
   echo json_encode($ret); 
?>
