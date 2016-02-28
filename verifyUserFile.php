<!DOCTYPE html>
<html>
<body>

<?php


$email= intval($_GET['email']);

$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Owner] WHERE [email] = '".$email."'");

    if($num_rows = mysql_num_rows($st) > 0) {

        echo "<p>";
        echo "as there are ".$num_rows." - you are already a user?";
        echo "</p>";

    }
    else{echo "<p>";
        echo "as there are ".$num_rows." - aye, keep gawn";
        echo "</p>";}

    //foreach($st->fetchAll() as $row) {


}
catch(PDOException $e)
{print"$e";}

?>
</body>
</html>