<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
	
<style>
    @import url("mein1.css");
	
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
                     
                        ?>
			</div>
		
		
<div class="element2"><a href="index2.php"><?php include ('menu.php');?></a>		
</div>
                
</body>
</body>
</html>
