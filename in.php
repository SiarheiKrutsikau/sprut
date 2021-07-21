<style>
    @import url("mein.css");
</style>
<?php
session_start([ 'name' => 'sprut']);
include ('bd.php');

function out()
{
    $url = $_SERVER['REQUEST_URI'];
     if($url=='/index4.php' or $url=='/index5.php')
     {
    $_SESSION=array();
    session_destroy();
    session_write_close();
    setcookie("user", null,-1);
    setcookie("sprut", null);
    session_start([ 'name' => 'test']);
    unset($_SESSION['newadmin']);
     }
 else {
     $_SESSION=array();
     session_destroy();
     session_write_close();
     setcookie("user", null,-1);
     setcookie("sprut", null);
     session_start([ 'name' => 'test']);
     $new_url = 'index4.php';
     header('Location: '.$new_url);
     exit();
     }
}
function outdel()
{
    
     
     $_SESSION=array();
     session_destroy();
     session_write_close();
     setcookie("user", null,-1);
     setcookie("sprut", null);
     session_start([ 'name' => 'test']);
}

if(!session_id() or !session_name()=='sprut' or !isset($_SESSION['name']) or !isset($_SESSION['id']) or $_SESSION['id']!=session_id())
{
    
        if(isset($_COOKIE["user"]))
        {
            $password=$_COOKIE["user"];
            
            //считывает все логины и пароли
            $team="SELECT authoid, authoidp, root FROM autho";
            $autho=mysqli_query($conect, $team);
            while($authoidp=mysqli_fetch_array($autho))
              {
                $all=$authoidp['authoid'].$authoidp['authoidp'];
            
                //проверяет на совпадение
                    if(password_verify($all,$password))
                    {
                        //закрытие сесии 
                        $_SESSION=array();
                         session_destroy();
                         session_write_close ();
                         
                        //создание нормальной сесии
                        session_start([ 'name' => 'sprut']);
                        $_SESSION['name']=$authoidp ['authoid'];
                        $_SESSION['id']=session_id();
                        if($authoidp ['root']=='root')
                            {
                            $_SESSION['root']='root';    
                            }
                            
                        //обновление куки 
                        setcookie("user", null,-1);
                        $allpas = password_hash($all,PASSWORD_BCRYPT);
                        setcookie("user",$allpas,time()+605000); 
                        
                        // выход 
                        unset($_POST);
                        
                    }
                    else
                    {
                       out();
                       
                    }
              }
                          
        }
        else
        {
            out();
        }
        
   
}
else
{
    //проверка на удаление root администратором
    $name=trim($_SESSION['name']);
     $team="SELECT del FROM autho WHERE authoid='$name'";
     $autho=mysqli_query($conect, $team);
     $rows=mysqli_num_rows($autho);
     
     if($rows==1)
     {
        $authoidp=mysqli_fetch_array($autho);
        if($authoidp['del']=='*')
        {
             outdel();            
            echo "<a class='red' href='index4.php' >Доступ закрыт root администратором</a>"; exit();
           
        }
     }
 else {
       outdel();  
     echo "<a class='red' href='index4.php' >Доступ закрыт</a>"; exit();
            
     }
     //echo "вход успешный </br>";
}
?>


