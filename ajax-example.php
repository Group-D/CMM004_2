<?php
/**
 * Created by PhpStorm.
 * User: Borris
 * Date: 28/02/2016
 * Time: 15:14
 */

$email = $_GET['email'];
$password = $_GET['password'];

//echo "Query: ".$email." ".$password;


$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
  $st = $conn-> query("SELECT * FROM [Owner] WHERE [email] = '".$email."'");

    $count;
foreach($st->fetchAll() as $row) {

    $count++;

        echo "search ".$count;

}
    if($count>0){
        echo "aye, game";
    }
    else{echo "we dinna recognise yer email, son";}

}
catch(PDOException $e)
{echo "$e";}


?>