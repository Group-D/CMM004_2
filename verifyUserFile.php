<!DOCTYPE html>
<html>
<body>

<?php


$email= intval($_GET['email']);

$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Owner] WHERE [email] = '".$email."'");

    foreach($st->fetchAll() as $row) {

        echo "emails matching your search ".$row[email];
        print("emails matching your search ".$row[email]);
    }

}
catch(PDOException $e)
{echo "$e";}


?>
</body>
</html>