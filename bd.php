<?php
$host="localhost";
$user="b9_28594072";
$password="12345";
$database="basex";
$conect=mysqli_connect($host, $user, $password, $database) //подключаемся к серверу
or die("Не возможно сщединиться с базой данных. Подключите базу serysite...  " . mysqli_error($conect)); 
echo "К базе подключено успешно"; 

?>