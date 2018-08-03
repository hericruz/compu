
 <?php
       $db_host = "sql10.freemysqlhosting.net:3306";
       $db_name = "sql10250352";
       $db_user = "sql10250352";
       $db_password = "8TpZ2UCiFP";
       $connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
        mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
          @mysqli_query("SET NAMES 'utf8'");
    $sql_query = "SELECT * FROM cliente";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>

