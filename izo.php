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
	
	.block .element1{
	border: solid 0px #C7CADD;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	float: left;
	height: 200px;
	width: 100%;
		background-color: white;
		color: white;
		text-align: center;
	}
	
	
	.block .element2{
	border: solid 3px #CFBD16;
	text-align: center;
	
	height: auto;
	width: 17%;
	background-color: white;
	border-radius: 25px;
	font-size: 24px;
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
	
	/*.f0{
	border: solid 3px #CFBD16;
	text-align: center;
	/*padding: 10px 10px 10px 10px; /*внутрений абзац*/
/*	float: left;
	height: 200px;
	width: 200px;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	box-shadow: 0 0 0 3px #FFFFFF, 
                0 0 0 1px #CFBD16,
                5px 5px 5px 5px #CFBD16;
	color: #AC9E16;
margin: 50px 50px 50px 50px;
	}
	*/
	
	
	
	/*.folder:hover{	
	border: solid 3px #CFBD16;
	text-align: center;
	height: 200px;
	width: 200px;
	background-color: white;
	border-radius: 25px;
	float: left;
		width: 30%;
		font-size: 25px;
	box-shadow: 0 0 0 3px #FFFFFF, 
                0 0 0 1px #CFBD16,
                5px 5px 5px 5px #CFBD16;
	color:#CFBD16;
margin: 50px 50px 50px 50px;
	
	}*/
	
	.image
	{
		border: solid 0px #CFBD16;
		
	text-align: center;
	
	height: 350px;
	width: 350px;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	margin: 20px;
	
	}
	.os{
		height: 500px;
	width: 100%x;
		background-color: white;
		float: left;
		
		/*min-width: 200px;*/
	
	}
	
	
	.f{
			border: solid 2px #AC9E16;
		width:300px;
			height: 300px;
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
			height: 300px;
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
		font-size: 24px;
		}
	.buttonmini0{
			 display: inline-block;/*ширины div по содержимому дочерних элементов
		Многоцелевое свойство, которое определяет, как элемент должен быть показан в документе.
		
		*/
		border: solid 0px #AC9E16;
		/*width:400px;
		height:54px;*/
		float: bottom;
		
			background: white;
		/*	margin: auto; /* верх и низ: отступ 0 ,блок отцентрирован горизонтально */
		border-radius: 25px;
		/*margin-left: auto;
		margin-right: auto;*/
		padding: 5 0 5 0;
		text-align: center;
		color:#AC9E16;
		font-size: 24px;
	}
	.buttonmini{
		display: flex;
		justify-content: center;
		align-items: center;
		/*Центрирование с использованием модели flexbox
Данный метод поддерживается всеми современными браузерами.
		display: flex;
    justify-content: center; /*Центрирование по горизонтали*/
    /*align-items: center;     /*Центрирование по вертикали */
		
		float:left;	
		border: solid 2px #AC9E16;
		width: 160px;
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
		/*Центрирование с использованием модели flexbox
Данный метод поддерживается всеми современными браузерами.
		display: flex;
    justify-content: center; /*Центрирование по горизонтали*/
    /*align-items: center;     /*Центрирование по вертикали */
		
		float:left;	
		border: solid 2px #AC9E16;
		width:160px;
		height: 50px;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 18px;
	margin: 0  10px 0 10px /*верх  право низ лево  */
			
			
		}
	/*Чтобы центрировать что-то горизонтально в современных браузерах, вы можете использовать display: flex; justify-content: center; в старых браузерах.margin: 0 auto;*/
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
                                    echo "Есть такое имя"; break;
                                }
                                else if($col=$ch)
                                {
                                 echo "<a style='color:red; font-size: 25px;' href='index2.php?lc=$lc'  >Нет такого файла. Вернитесь к файлам папки.</a>"; exit;

                                }
                               
			}
                       echo "ghbdtn"; exit();                        
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
			
			//создание zip arhiva
			$aname='images/'.$rc;
				
			$files=array($aname);
			$zipname = 'zip/'.$id.'.zip';
			
		$zip=new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
		
			foreach($files as $file)
			{
				$zip->addFile($file);
				
			}
			$zip->close();
			
		
			
				echo "<a href='images/$id.png' download ><div class='fmax'><img class='image' src='images/$id.png' ></div></a>";
					
		
		//<div class="buttonmini"><a href="index.php"><<</a></div><div class="buttonmini">
		//	<a href="index.php">>></a></div> кнопки вперд назад
			
			?>
		<br>
		<div class="buttonmini0">
			
			</div>
			<br><br>
			<div class="buttonmini0">
			
			
			<?php 
				
				echo "<a href='index2.php' ><div class='buttonmini'>BACK</div></a>";
				echo "<a href='images/$id.png' download ><div class='buttonmini'>DOWNLOAD</div></a>"; 
				echo "<a href='zip/$id.zip' download ><div class='buttonmini'>DOWNLOAD ZIP</div></a>";
				?>
			
		
			</div>
		</div>
			
				
		
			
			
		<div class="element2"><a href="index2.php">DOG 	FORMAT PNG</a><br>
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
