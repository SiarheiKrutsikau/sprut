<!doctype html>
<html>
<head>
<style>
.center {
  margin:  10px auto ;
    display: block;
		
}
	.center1 {
    margin: 1rem 0 0 0 ;
    display: block;
		 
}
	.center2 {
    margin: -1rem 0 0 2rem;
    display: block;
}
	.buttonmini{
	
		justify-content: center;
		align-items: center;
		/*Центрирование с использованием модели flexbox
Данный метод поддерживается всеми современными браузерами.
		display: flex;
    justify-content: center; /*Центрирование по горизонтали*/
    /*align-items: center;     /*Центрирование по вертикали */
 display: inline-block;
		
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #AC9E16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		padding: 10px 20px 10px 20px; 
	margin: 5px 0px 20px 0px /*верх  право низ лево  */
	}
		.buttonmini:hover{
	
		justify-content: center;
		align-items: center;
		
 display: inline-block;
		
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #CFBD16;;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 10px 20px 10px 20px; 
	margin: 5px 0px 20px 0px /*верх  право низ лево  */
	}
	
	
	.i2{
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #AC9E16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		padding: 20px 10px 10px 10px; 
	margin: -1px  10px 0 10px /*верх  право низ лево  */
	}
	.i2:hover{
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #CFBD16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 20px 10px 10px 10px; 
	margin: -1px  10px 0 10px /*верх  право низ лево  */
	}
	
			.i3{
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #AC9E16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
	margin: 5px  8px 20px 10px /*верх  право низ лево  */
	}
			.i3:focus {
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		outline: none; /*убирает линию вокруг*/
		border: solid 2px #CFBD16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
	margin: 5px  8px 20px 10px /*верх  право низ лево  */
		
	}
	.i3:hover {
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		outline: none; /*убирает линию вокруг*/
		border: solid 2px #CFBD16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
	margin: 5px  8px 20px 10px /*верх  право низ лево  */
	}
	.i4{
		display: flex;
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 0px #AC9E16;
		width: auto;
		height: auto;
		background:white;
		border-radius: 25px;
		text-align: center;
		color:#AC9E16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
	margin: 5px  0px 10px 0px /*верх  право низ лево  */
	}
</style>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
	

<body>
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
		</form>
	</div>
	
</body>
</html>
