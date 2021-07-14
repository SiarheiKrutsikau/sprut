<?php
//проверка на 0 и отсутствие
$linback=$_SERVER['HTTP_REFERER'];

$id=(int)$_GET['new'];
if ($id==NULL or $id==0)
{$id=1;}
	
?>
<html>
<head>
	
<meta charset="utf-8">
<title>Документ без названия</title>
	
<style type="text/css">
	.block {
	padding: 0;
		border: solid 0px #C7CADD;
	font-size: 14px;
		width: 100%;
		height: auto;
margin: 0 auto;
	min-width:800px;
	}
	
	.element1{
	border: solid 0px #AC9E16;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	float: left;
	height: 115px;
	width: 100%;
		background-color: white;
		color: white;
		text-align: center;
	}
	.element1:hover{
	border: solid 0px #CFBD16;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	float: left;
	height: 115px;
	width: 100%;
		background-color: white;
		color: white;
		text-align: center;
	}
	
	.element2{
	border: solid 3px #AC9E16;
	text-align: center;
	
	height: auto;
	width: 17%;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	padding: 20px;
	float: right;
	margin-top: 4%;
	margin-right: 1%;	
		
	}
	.element2:hover{
	border: solid 3px #CFBD16;
	text-align: center;
	
	height: auto;
	width: 17%;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	padding: 20px;
	float: right;
	margin-top: 4%;
	margin-right: 1%;	
		
	}
	
	 a { 
    text-decoration: none; /* Убираем подчеркивание у ссылок */
		color: #AC9E16; 
		
   }
	a:hover { 
    /*text-decoration: underline;*/
		color: #CFBD16;
	}
	
	.element3{
	width: 75%;
	height: auto;
	min-height: 100px;
		border: solid 0px #000000;
	padding: 10px;
		margin-top: 3%;
	background-color: white;
	color: black;
	float:left;
		
		text-align: center;
		
	}

	
	.element4{
	border: solid 0px #000000;
	margin: 50px 50px 0px 0px;
	padding: 0px 0px 0px 0px;
	
	height: 10px;
	width: 100%;
	clear:both;
	
		background-color: white;
		color: black;
	}
	
	.r1{
		
	border: solid 0px #C7CADD;
	
	
		
	height: 100px;
	width: 100%;
		
		background-color: white;
		color: white;
		margin: 10px 0px 0px 0px;	/*внешний отступ*/
	}
	
	.f1{
		height: auto;
	width: 20%;
		background-color: white;
		float: right;
		
		margin-top: 30px;
		/*min-width: 200px;*/
		margin-right: 1%;
	}
	
	
	
	.image
	{
	border: solid 0px #CFBD16;
	text-align: center;
	height: 406px;
	width: 602px ;
	background-color: white;
	border-radius: 0px;
	font-size: 25px;
	margin: 10px 0 10px 0;
	}
        
	
	.os{
		height: 500px;
	width: 100%x;
		background-color: white;
		float: left;
	
	
	}
	
	
	.f{
			border: solid 2px #AC9E16;
		width:300px;
			height: 350px;
			background: white;
			float: left;
		border-radius: 25px;
		margin: 10px;
		text-align: center;
		color:#AC9E16;
		font-size: 24px;
		}
	.f:hover{
			border: solid 2px #CFBD16; 
			width:300px;
			height: 350px;
			background:white;
			float: left;
		border-radius: 25px;
		margin: 10px;
		text-align: center;
			color:#CFBD16;
			font-size: 24px;
		}
	.fmax{
			border: solid 2px #AC9E16;
		width:auto;
			height: auto;
			background: white;
			
		border-radius: 25px;
		margin: 0px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		}
         .fmax:hover{
			border: solid 2px #CFBD16;
		width:auto;
			height: auto;
			background: white;
			
		border-radius: 25px;
		margin: 0px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		}
	.buttonmini0{
		display: inline-block;
		border: solid 0px #AC9E16;
		float: bottom;
		background: white;
		border-radius: 25px;
		padding: 5 0 5 0;
		text-align: center;
		color:#AC9E16;
		font-size: 24px;
	}
	.buttonmini{
		display: flex;
		justify-content: center;
		align-items: center;
		float:left;	
		border: solid 2px #AC9E16;
		width: 140px;
		height: 50px;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#AC9E16;
		font-size: 18px;
	margin: 0  10px 0 10px /*верх  право низ лево  */
		}
                
	.buttonmini:hover{
			display: flex;
		justify-content: center;
		align-items: center;
		float:left;	
		border: solid 2px #CFBD16;
		width:140px;
		height: 50px;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 18px;
	margin: 0  10px 0 10px /*верх  право низ лево  */
			}
	.buttonmini2{
		display: inline-block;
		border: solid 0px #AC9E16;
		margin-left: auto;
                margin-right: auto;
		background: white;
		width: auto;
		height: auto;
        }
</style> 
</head>
<body>

	<div class="block">
		<a href="index.php"><div class="element1"> <img src="logo.png" width="800" height="200" alt=""/> </div></a>
		
		
		<div class="element3">
	<?php 
   
			include('bd.php');
                       //проверка $_GET['rc']
			if(isset($_GET['rc']) and trim ($_GET['rc']!=NULL))
                        {
                            
                             $rc=trim($_GET['rc']);
                            $lc=trim($_GET['lc']);
                            
                        }
                        else
                       {
                            $lc=trim($_GET['lc']);
                            echo "<a style='color:red; font-size: 25px;' href='index2.php?lc=$lc'  >Нет такого файла. Вернитесь к файлам папки.</a>"; exit;
                        }
        // проверка существования lc в базе
                         $team="SELECT id  FROM tablefiles WHERE linkf=$lc";
			$dfolder=mysqli_query($conect, $team);
                        $a=mysqli_fetch_array($dfolder);
                        if (!$a['id'])
                        {
                            echo "<a style='color:red; font-size: 25px;' href='index.php' >Не правильная ссылка LC. Вернитесь к файлам папки.</a>"; exit;
                        }
                       // else echo "ok";
                         
                        
        // проверка существования имени передаваемого $_GET['rc'] в базе
                        $team="SELECT compnamef FROM tablefiles WHERE linkf=$lc";
			$dfolder=mysqli_query($conect, $team); 
                        $col = mysqli_num_rows($dfolder);$ch=0;
                        while ($a=mysqli_fetch_array($dfolder))
			{
                           $ch++;
                           $b=trim ($a['compnamef']);
                          if($b==$rc)
                                {
                                     break;
                                }
                                else if($col==$ch)
                                {
                                 echo "<a style='color:red; font-size: 25px;' href='index2.php?lc=$lc'  >Нет такого файла. Вернитесь к файлам папки.</a>"; exit;

                                }
                               
			}
                                        
// удаление файлов из папки zip
$cat=scandir("zip/");
foreach ($cat as $d)
{
    if(!($d=="." or $d==".." or $d==NULL))
    {
        $p='zip/'.$d;
        unlink ($p);
    }
}
// удаление файлов из папки txt
$cat=scandir("txt/");
foreach ($cat as $d)
{
    if(!($d=="." or $d==".." or $d==NULL or $d=="report on all files.txt" or $d=="report recent files.txt"))
    {
        $p='txt/'.$d;
        unlink ($p);
    }
}
			
// получение имени папки
$team="SELECT namefolder, unamefolder FROM menu WHERE linkcopy='$lc'";
$dfolder=mysqli_query($conect, $team);               
$a=mysqli_fetch_array($dfolder);
$namefolder=$a['namefolder'];
$unamefolder=$a['unamefolder'];
//echo "<a style='font-size: 25px;' href='index2.php?lc=$lc'  multiple title='Вернуться в папку'>Папка: $unamefolder</a>";
$team=	"SELECT  `namef`, `author`, `sdata`, `mcamera`, `diafragme`, `excerpt`, `iso`, `focus`, `expo`, `aperture`, `manufacturer`, `expomet`, `width`, `height`, `program`, `sizefb`, `sizefmb`, `copyright` FROM tablefiles WHERE compnamef='$rc'";
$dfolder=mysqli_query($conect, $team);
$al=mysqli_fetch_array($dfolder);
 
//создание zip arhiva
$cj=$al['namef'];
$c=substr($cj, 0, strpos($cj,"."));
$aname="images/$namefolder/".$rc;
$files=array($aname);
$zipname = 'zip/'.$c.'.zip';
$zip=new ZipArchive;
$zip->open($zipname, ZipArchive::CREATE);
foreach($files as $file)
{

    $zip->addFile($file,$entryname = "$cj");
}			
$zip->close();				      			                 
                        
 //вывод файла
//формат файла, к верхему регистру
$format = mb_strtoupper(strtolower(substr($rc, strpos($rc, '.'))));
$team="SELECT  pbig  FROM tablefiles WHERE linkf='$lc' AND compnamef='$rc'";
    $dfolder=mysqli_query($conect, $team);
    $raw=mysqli_fetch_array($dfolder);
    $raw=$raw['pbig'];
 echo"<a href='$zipname' download ><div class='fmax'><img class='image' src='$raw' ></a>";

//exif файла вывод
$marray=array("Имя файла"=>"нет данных", "Автор"=>"нет данных", "Дата съемки"=>"нет данных", "Модель камеры"=>"нет данных", "Диафрагма"=>"нет данных", "Выдержка"=>"нет данных", "ISO"=>"нет данных", "Фокусное расстояние объектива"=>"нет данных", "Экспокоррекция"=>"нет данных", "Светосила"=>"нет данных", "Изготовитель камеры"=>"нет данных", "Экспозамер"=>"нет данных", "Ширина изображения"=>"нет данных", "Высота изображения"=>"нет данных", "Программа экспозиции"=>"нет данных", "Размер изображения, байт"=>"нет данных", "Размер изображения, Мбайт"=>"нет данных", "Авторские права"=>"нет данных");
$m=0;
foreach ($marray as $keys=>$value)
{
 
    $marray[$keys]=$al[$m];
    $m++;
}
//создание навигации

$team="SELECT compnamef FROM tablefiles WHERE linkf=$lc";
$dfolder=mysqli_query($conect, $team); 
$cnf = mysqli_num_rows($dfolder);
$nav=array();
while ($a=mysqli_fetch_array($dfolder))
{
    array_push($nav,$a['compnamef']);
}
$nulp=array_keys($nav,$rc,)[0];
$maxx= array_key_last($nav);

if ($nulp!=0)
{
    $min=$nulp-1;
    
}
 else {
    $min=0;
}
if ($nulp!=$maxx)
{
    $max=$nulp+1;
}
 else {
$max=$maxx;    
}
//echo $min, $max,$maxx;
$rcmin=$nav[$min];
$rcmax=$nav[$max];
$ptxt='txt/finfo_'.$c.'.txt';
echo "<div class='buttonmini2'>";
echo "<div class='buttonmini'><a href='izo.php?rc=$rcmin&lc=$lc' multiple title='Предыдущее изображение'><<</a></div><div class='buttonmini'>";
echo "<a href='izo.php?rc=$rcmax&lc=$lc' multiple title='Следущее изображение'>>></a></div>";
echo "<a href='index2.php?lc=$lc' multiple title='Вернуться в папку'><div class='buttonmini'>BACK</div></a>";
echo "<a href='$aname' download='$cj' multiple title='Скачать изображение'><div class='buttonmini'>DOWNLOAD</div></a>"; 
echo "<a href='$zipname' download ><div class='buttonmini' multiple title='Скачать ZIP архив с изображением'>DOWNLOAD</br>ZIP</div></a>";
echo "<a href='$ptxt' download='finfo_$c.txt' multiple title='Скачать TXT файл с данными описания изображения (EXIF)'><div class='buttonmini'>DOWNLOAD</br>TXT</div></a></br></br></br>";
echo "</div></br>";
// запись временного файла txt в файл, вывод на экран
		
                $fp1=fopen($ptxt, 'w+');
		$timedata=date('d-m-Y H:i:s');
                
		$text="\n Дата записи файла: $timedata \n";
		fwrite($fp1, $text);
 foreach ($marray as $e=>$f)
{
  $text=$e.":	".$f."\n";
  fwrite($fp1, $text);
    echo $e.":     ".$f.'</br>';
    if($e=='Имя файла') echo "</br>";
}
fclose($fp1);
echo '</br></div>';

       
unset ($rc); 
?>
</br>
</div>			
<div class="element2"><a href="index2.php"><?php include ('menu.php');?></a>
</div>
		
		<div class="f1">
		<div class="r1">реклама1</div>
		<div class="r1">реклама2</div>
		<div class="r1">реклама3</div>
		</div>
</div>	
		
		
		
			
	


		
	
	
</body>
	
	
 
	
</body>
</html>
