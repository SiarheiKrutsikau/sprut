<?php

include('in.php');

?>
<html>
<style>
@import url("mein.css");
</style>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
	

<body>
   
	<img  class = "center" src="sprut.gif" width="300" height="107" alt=""/>
       <div class="center" >
       <?php
       $user=$_SESSION['name'];
       if ($_SESSION['root'] == 'root')
       {
           
           $dop = 'ROOT администратор '.$user;
       }
      else {
               $dop='Администратор '.$user;
           }
           
       echo "<div class='i3'>$dop</br>";
       
       ?>
	
            
            <div class="buttonmini2">
            <a  href='index6.php'>Загрузка изображений и создание папок</a>
            <a  href='index3.php' id='1'>Сохранить отчет последней загрузки(формат TXT)</a>
            <a  href='index3.php'>Сохранить отчет загрузки за все время (формат TXT)</a>
            <a  href='index3.php'>Удаление папок с изображениями</a>
            <a  href='index3.php'>Удаление изображений из папок</a>
            <a  href='index3.php'>Сделать копии баз данных</a>
            <a  href='index3.php'>Импорт всех изображения (ZIP архив)</a>
           </div></br>
        
            <div class="buttonmini2"> 
            <a  href='index5.php'>Создание логина и пароля нового администратора</a>
            <a  href='index3.php'>Удалить права доступа администратора</a>
            <a  href='index3.php'>Востановить администратора в правах</a>
            <a  href='index3.php'>Изменить имя администратора</a>
            <a  href='index3.php'>Изменить пароль администратора</a>
            <a  href='index3.php'>Посмотреть сеансы работы администраторов</a>
            <a  href='index3.php'>Передать root права администратора</a>
            
	 </div>
            <a  href='out.php'>Закрыть сеанс администрирования</a>
        </div>
	</div>
					  
		
	
</body>
</html>
