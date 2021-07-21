<?php

include 'in.php';
if($_SESSION['root']=='write' and session_name()=='test')
{
    $r='root администратора';
    $root = 'root';
}
else
{
    $r='администратора';
    $root = NULL;
}

if($_SESSION['test']!='OK' and ($_SESSION['newadmin'] and !$_POST))
 {
   
    $new_url = 'index4.php';
    unset($_SESSION['newadmin'], $_SESSION['test'], $_POST);
    $_SESSION=array();
    session_destroy();
    
    header('Location: '.$new_url);
    exit();
 }

  else {
     unset($_SESSION['newadmin'], $_SESSION['test']);
  }

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
 <?php
 include ('bd.php');


  if(isset($_POST['newlogin']) and isset($_POST['newpassword']) and isset($_POST['newpassword1']))
  {
      
      //проверка пароля
      if(trim ($_POST['newpassword'])!=trim ($_POST['newpassword1']))
      {
          echo "<a class='red' href='index5.php'  >Пароли не совпадают! Логин и пароль не созданы.</a>";
          $_SESSION['newadmin']='OK'; 
          unset($_POST, $_SESSION['test'], $_SESSION['root']);
          exit();
      }
     
        $newlogin=trim ($_POST['newlogin']);
        //проверка на существование логина
        $team="SELECT authoid FROM autho";
        $autho=mysqli_query($conect, $team);
        while ($authoid=mysqli_fetch_array($autho))
        {
            if ($authoid['authoid']==$newlogin)
            {
             echo "<a class='red' href='index5.php'  >Логин/Пароль уже существуют</a>";
             $_SESSION['newadmin']='OK'; 
          unset($_POST, $_SESSION['test'], $_SESSION['root']);
          exit();
            }
        }   
            //создание пароля
           $newp=trim ($_POST['newpassword']);
            $newpass=password_hash($newp, PASSWORD_BCRYPT);
            
            //время создания 
            $time = time();
            $metkarab = date ("d:m:Y H:i:s", $time);

            //запись данных
            $team="INSERT INTO `autho` (`id`, `authoid`, `authoidp`, `metkarab`,`root`, `del`) VALUES (NULL, '$newlogin', '$newpass', '$metkarab', '$root', NULL)";
            $autho=mysqli_query($conect, $team);
            
           
            unset($_POST, $_SESSION['newadmin'], $_SESSION['test'], $_SESSION['root']);
            echo "<a class='red' href='index4.php' >Логин и пароль для нового администратора созданы</a>";
            exit();
  }
  else 
  {
     // $_SESSION['newadmin']='OK'; 
  }
 

 ?>
<img  class = "center" src="sprut.gif" width="300" height="107" alt=""/>
	
	<div class="i4">
		<form class="i3" action="index5.php" method="POST" enctype="multipart/form-data" >
<?php echo "Создание нового логина и пароля для $r";?><br>
				  <div class="buttonmini"> Логин <br>
	<input class="i3" type="text"  required title="Введите имя" size='25' maxlength='20' name="newlogin">	
		  
	</div>
				  </br>
			<div class="buttonmini"> Пароль <br>
	<input class="i3" type="password"  required title="Введите пароль" size='25' maxlength='20' name="newpassword" >	
	        
	</div>        </br>
			<div class="buttonmini"> Подтверждение пароля <br>
	<input class="i3" type="password"  required title="Введите пароль" size='25' maxlength='20' name="newpassword1" >	
	
        
	</div> </br>
        
        <input class="i3" type="submit">	
        
	</div>

<a  href='index.php'>Вернуться к сайту</a>
<a  href='index4.php'>Вернуться к авторизации администратора</a>			
	
	</div>
	
</body>
</html>
