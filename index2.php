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
	
	
	.block .element2{
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
	
	
</style> 
</head>
<body>

	<div class="block">
		<a href="index.php"><div class="element1"> <img src="logo.png" width="800" height="200" alt=""/> </div></a>
		
		
		<div class="element3">
	<?php
			var_dump($_GET['lc']);
			if(isset($_GET['lc']) and trim ($_GET['lc']!=NULL)) $get=trim($_GET['lc']);
			include('bd.php');
			$team="SELECT unamefolder, linkcopy, previewfolder FROM tablefiles WHERE linkf=$get";
			
			$dfolder=mysqli_query($conect, $team);
	  		$col = mysqli_num_rows($dfolder);
			echo $col;
			
			echo '<a href="index.php"><div class="f"></br></br></br></br></br>back</div></a>';
				for($i=1;$i<221;$i++)
			{
				
				echo "<a $id = '$i'  href='izo.php?new=$i'><div class='f'></br><img src='images/$i.png' width='200' height='204'></br>dog</div></a>";
				
		
			}
			echo '<a href="index.php"><div class="f"></br></br></br></br></br>back</div></a>';
			?>
			</div>
		
		
		<div class="element2"><a href="">DOG 	FORMAT PNG</a></div>
		
		<div class="f1">
		<div class="r1">реклама1</div>
		<div class="r1">реклама2</div>
		<div class="r1">реклама3</div>
		</div>
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
