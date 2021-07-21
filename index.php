<?php
include('in.php');
?>
<html>
<head>

    
<meta charset="utf-8">
<title>Документ без названия</title>
	
<style type="text/css">
	@import url("mein1.css");
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
				
				echo "<a href='index2.php?lc=$a[linkcopy]'><div class='f'><img class='image' src='$a[previewfolder]' width='250' height='250'>Папка:</br>$a[unamefolder]</div></a>";
			}

			
			
			?>
			</div>
		
		
		<div class="element2">
			<a href="index2.php"><?php include ('menu.php');?></a>
		
		</div>
		
		<div class="f1">
		
		<div class="r1">реклама3</div>
		<div class="elem4"><a  href='index4.php' >Администрирование cайта</a></div>
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
</html>
