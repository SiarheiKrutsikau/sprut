
<?php

?>

<html>
<style>
@import url("mein.css");
</style>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
	

<body>
    <?php
        //проверка 
        include('bd.php');
        $team="SELECT authoid FROM autho WHERE id=1";
        $auto=mysqli_query($conect, $team);
        $authoid=mysqli_fetch_array($auto);
        //вставка строки
        if (!$authoid['authoid'])
        {
          echo "В базе данных нет ключа или таблицы";
        }
        //считывание ключа        
        $team="SELECT authoid FROM autho WHERE id=1";
        $autho=mysqli_query($conect, $team);
        $authoid=mysqli_fetch_array($autho);
        $key=$authoid['authoid'];
       
         ?>
	<img  class = "center" src="sprut.gif" width="300" height="107" alt=""/>
    

	<div class="i4">
		<form class="i3" action="upload.php" method="POST" enctype="multipart/form-data" accept="image/jpeg, image/jpg,  image/CR2, image/NEF, image/tif, image/tiff, image/gif, image/png ">
			
				  <div class="buttonmini"> Название папки <br>
	<input class="i3" type="text"  required title="Имя в меню и папке" size='25' maxlength='25' name="namefolder" >	
					 
	<div> Изображение для папки<br>
	<input   type="file" class="i3" required  name="ifolder" multiple title="Необходимо выбрать один файл" accept="image/jpeg", "image/jpg" ><br>Формат файлов: .jpeg<br>		  
	</div>
					  
					  
	</div>
	</br> Файлы для загрузки<br>
		<input   type="file" class="i3" required  name="image[]" multiple title="Необходимо выбрать минимум один файл" accept="*">
			 <br>Формат файлов:<br> .jpeg .tiff .png .gif .bmp .CR2 (Canon) .NEF (Nikon)<br><br>
			 <input class="i3" type="submit">
                         <?php echo "<input type='hidden' name='key' value='$key'> "; ?>
		</form>
	</div>
	
</body>
</html>
