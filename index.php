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

	
	.elem4{
	/*border: solid 1px #C7CADD;
	height: 100px;
	width: 100%;
	background-color: white;
	color: black;
	margin: 10px 0px 0px 0px;	/*внешний отступ*/
	border: solid 3px #AC9E16;
	text-align: center;
	
	height: auto;
	width: auto;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	padding: 20px;
	float: right;
	margin-top: 4%;
	margin-right: 1%;	
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
		
		width: 20%;
		height: auto;
		background-color: white;
		float: right;
		border: solid 0px #C7CADD;
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
	
	height: 150px;
	width: 150px;
	background-color: white;
	border-radius: 25px;
	font-size: 25px;
	
	
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
	.img
        {
       display: block;
        margin-left: auto;
        margin-right: auto;
         margin-bottom: 100;
        //width: 50%;
    
        }
	
</style> 
</head>
<body>

	<div class="block">
		
		<a href="index.php"><div class="element1"> <img src="logo.png" width="800" height="200" alt=""/> </div></a>
		
		
		<div class="element3">
			
	<?php
			include('bd.php');
			$team="SELECT unamefolder, linkcopy, previewfolder FROM menu";
			
			$dfolder=mysqli_query($conect, $team);
	  		$col = mysqli_num_rows($dfolder);
			
			while ($a=mysqli_fetch_array($dfolder))
			{
				
				echo "<a href='index2.php?lc=$a[linkcopy]'><div class='f'><img class='img' src='$a[previewfolder]' width='250' height='250'>Папка:</br>$a[unamefolder]</div></a>";
			}

			
			
			?>
			</div>
		
		
		<div class="element2">
			<a href="index2.php">DOG 	FORMAT PNG</a>
		
		</div>
		
		<div class="f1">
		
		<div class="r1">реклама3</div>
		<div class="elem4"><a  href='index5.php' >Администрирование cайта</a></div>
		</div>
		
</div>	
		
		
		
			
	

<?php
	/*for($i=1;$i<4;$i++)
			{
				<a href="index3.php">JPG</a>
				echo $i.'<a href=""><div class="folder"><div class="image"><img  src="mlogo.png" width="150" height="150" alt=""/></div>DOG</div></a>';
				
			//echo '<div class="folder"><div class="image"><img src="mlogo.png" width="150" height="150" </div>DOG</div>';
			}*/
?>
		
	
	
</body>
	
	
 
	
</body>
</html>
