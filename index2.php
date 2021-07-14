<!doctype html>
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
	height: 200px;
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
	height: 200px;
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
	
		margin-top: 3%;
	background-color: white;
	color: black;
	float:left;
		margin-bottom: 4%;
		
		
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
	
	.f0{
	
	text-align: center;
	
	float: center;
	
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	color: #AC9E16;

	}
	.f0:hover{
            
	text-align: center;
	
	float: center;
	
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	color: #CFBD16;
        }
        
	
	
	
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
	
	height: 225px;
	width: 300px;
	background-color: white;
	border-radius: 0px;
	font-size: 20px;
	margin: 5px 0px 5px 0px;
	
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
		width:320px;
			height: 360px;
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
			width:320px;
			height: 360px;
			background:white;
			float: left;
		border-radius: 25px;
		margin: 10px;
		text-align: center;
			color:#CFBD16;
			font-size: 24px;
		}
	.f1{
			border: solid 2px #AC9E16;
		width:350px;
                height: 360px;
			background: white;
			float: left;
		border-radius: 25px;
		margin: 10px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		}
	.f1:hover{
			border: solid 2px #CFBD16; 
			width:350px;
			height: 360px;
			background:white;
			float: left;
		border-radius: 25px;
		margin: 10px;
		text-align: center;
			color:#CFBD16;
			font-size: 20px;
		}
	
</style> 
</head>
<body>

	<div class="block">
		<a href="index.php"><div class="element1"> <img src="logo.png" width="800" height="200" alt=""/> </div></a>
		
		
		<div class="element3">
	<?php
			include('bd.php');
                       // var_dump($_GET['lc']);
			if(isset($_GET['lc']) and trim ($_GET['lc']!=NULL)) $get=trim($_GET['lc']);
			include('bd.php');
                       	if(isset($_GET['lc']) and trim ($_GET['lc']!=NULL)) $get=trim($_GET['lc']);
                        // имя папки
                        $team="SELECT unamefolder FROM menu WHERE linkcopy=$get";
			$dfolder=mysqli_query($conect, $team);
                        $unamefolder=mysqli_fetch_array($dfolder);
                    
                        $unamefolder=$unamefolder['unamefolder'];
                        //echo $unamefolder;
                        echo "<div class='f0'>Имя папки: $unamefolder</div></br>";
                        // данные для вывода на страницу
			$team="SELECT compnamef, namef, author, previewf, sdata FROM tablefiles WHERE linkf=$get";
			$dfolder=mysqli_query($conect, $team);
	  		$col = mysqli_num_rows($dfolder);
                        echo '<a href="index.php"><div class="f"></br></br></br></br></br></br>back</div></a>';
			while ($a=mysqli_fetch_array($dfolder))
			{
				$b=trim ($a['compnamef']);
				echo "<a href='izo.php?rc=$b&lc=$get'><div class='f1'><img class='image' src='$a[previewf]'></br>Имя фала: $a[namef]</br>Автор: $a[author]</br>Дата создания: $a[sdata]</div></a>";
			}
			 
			echo '<a href="index.php"><div class="f"></br></br></br></br></br></br>back</div></a>';
                        //проверка таблицы на существование
                       /* $team="SELECT * FROM menu LIMIT 1";
                      	$dfolder=mysqli_query($conect, $team);
                       if ($dfolder) 
                       {
                           echo "swd";
                        }
                      */
                       
			/*
                        <div class="f1">
		<div class="r1">реклама1</div>
		<div class="r1">реклама2</div>
		<div class="r1">реклама3</div>
		</div>
                        */
                        ?>
			</div>
		
		
<div class="element2"><a href="index2.php"><?php include ('menu.php');?></a>		
		
</div>	
		
		
		
			
	

<?php
	/*for($i=1;$i<4;$i++)
			{
				
				echo $i.'<a href=""><div class="folder"><div class="image"><img  src="mlogo.png" width="150" height="150" alt=""/></div>DOG</div></a>';
				
			//echo '<div class="folder"><div class="image"><img src="mlogo.png" width="150" height="150" </div>DOG</div>';
			}*/
?>
		
	
	
</body>
	
	
 
	
</body>
</html>
