<style>
    @import url("mein.css");
</style>
<?php

session_start([ 'name' => 'test']);
if(session_name()=='test' and session_id() and $_SESSION['OK']=='true')
{
    include ('bd.php');
    $login = trim($_POST['login']);
    $passw= trim($_POST['password']);
    $team="SELECT * FROM autho WHERE authoid = '$login'";
    $autho=mysqli_query($conect, $team);
    $rows=mysqli_num_rows($autho);
    if($rows!=1)
    {
        echo "<a class='red' href='index4.php' >Не правильный логин или пароль</a>";
        unset($_POST);
        $_SESSION=array();
        session_destroy();
        session_write_close();
        exit();
    }
    $authoidp=mysqli_fetch_array($autho);
    if($authoidp ['del']==NULL)
    {
     
         if (password_verify($passw,$authoidp['authoidp']))
           {
               // если нажата галочка то root and cookie
                  if (isset($_POST['checkbox']) and $_POST['checkbox']='on')
                  {
                      unset($_POST['checkbox']);
                     echo "eiis востановление";
                      // установка куки
                      $all=$login.$authoidp['authoidp'];
                      $allpas = password_hash($all,PASSWORD_BCRYPT);
                      if(!isset($_COOKIE["user"]))
                      {
                          //создание нового 
                          setcookie("user",$allpas,time()+605000);  
                      }
                      else
                      {
                          //удаление куки
                         setcookie("user", null);
                          //создание новог
                          setcookie("user",$allpas,time()+605000);  
                          
                      }
                  }
                    else {
                        setcookie("user", null,-1);
                            }
            //закрытие общественной сесии 
                    $_SESSION=array();
                    session_destroy();
                    setcookie("test", null);
                   session_write_close ();
                   
                   //открытие именной
                   session_start([ 'name' => 'sprut']);
                 
                    //пользователь root или нет
                  if($authoidp ['root']=='root')
                   {
                   $_SESSION['root']='root';    
                   }
                   
                   //запись session_id() в базу данных
                /*  $metkarab= time();
                  $team="UPDATE `autho` SET `metkarab`='$metkarab' WHERE `authoid`='$login'";
                  $autho=mysqli_query($conect, $team);*/
                                 
                //задание сесии
                  $_SESSION['name']=$authoidp ['authoid'];
                  $_SESSION['id']=session_id();
                  
                  
                  //перенаправление
                 unset($_POST);
                 $new_url = 'menuadmin.php';
                 header('Location: '.$new_url);
             // var_dump($_SESSION);
                 exit();
            } 
             else 
             {
                 unset($_POST);
                 $_SESSION=array();
                 echo "<a class='red' href='index4.php' >Не правильный логин или пароль</a>"; exit();
             }
    }
    else
    {
     unset($_POST);
    $_SESSION=array();
    session_destroy();
     echo "<a class='red' href='index4.php' >Доступ закрыт root администратором</a>"; exit();
    }
}                   
 else 
 {
      unset($_POST);
    $_SESSION=array();
    session_destroy();
        echo "<a class='red' href='index4.php' >Не правильный логин или пароль. Нет общественной сессии</a>"; exit();
    }
?>   