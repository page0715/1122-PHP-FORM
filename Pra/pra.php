<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school;";
$pdo=new PDO($dsn,'root','');
$sql="select * from students";
$rows=$pdo->query($sql)->fetchAll();

//因為 print_r 會有回傳值, echo 會把那個值印出來, 所以後面會多一個 1 
echo print_r($rows[15]['name']);

echo "<pre>";
print_r($rows[15]['name']);
echo "<br>";
print_r($rows[0][2]);
echo "<br>";
print_r($rows[0]['parents']);
echo "<br>";
echo "</pre>";

?>
