<?php 

include('in.php');
 
if(session_id() and session_name()=='sprut' and isset($_SESSION['name']) and isset($_SESSION['id']) and $_SESSION['id']==session_id())
{
    
    unset($_POST);
    $new_url = 'menuadmin.php';
    header('Location: '.$new_url);
    exit();
}

session_start([ 'name' => 'test']);
?>
<html>
<head>
<style>
    @import url("mein.css");
</style>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
	

<body>

<img  class = "center" src="sprut.gif" width="300" height="107" alt=""/>
	
	<div class="i4">
		<form class="i3" action="index3.php" method="POST" enctype="multipart/form-data" >
			Авторизация администратора<br>
				  <div class="buttonmini"> Логин <br>
	<input class="i3" type="text"  required title="Введите имя" size='25' maxlength='20' name="login" >	
		  
	</div>
				  </br>
			<div class="buttonmini"> Пароль <br>
	<input class="i3" type="password"  required title="Введите пароль" size='25' maxlength='20' name="password" >	
		  
	</div> </br><input class="i3" type="submit"></br>
        <input class="i3" type="checkbox" name="checkbox">запомнить меня
	</div>


</div>

<?php


include_once ('bd.php');
$team="SELECT authoid FROM autho WHERE id=1";
$autho=mysqli_query($conect, $team);
echo "<a  href='index.php'>Вернуться к сайту</a>";
if(session_name() and session_id())
{
$_SESSION['OK']='true';
}

if (!mysqli_fetch_array($autho))
{
  
$_SESSION['test']='OK'; 
$_SESSION['root']='write'; 
echo "<a  href='index5.php' >Создание логина и пароля для root администратора</a>";
}
?>		
	
</body>
</html>
