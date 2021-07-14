<html>
<head>
<style>
.center {
  margin:  10px auto ;
  display: grid;
	height: auto;
	background: white;
		}
.center1{
		justify-content: center;
		align-items: center;
		float:top;	
                grid-row: 1;
		justify-content: center;
		align-items: left;
		border: solid 2px #AC9E16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#008400;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
                margin: 0px  0px 0px 0px /*верх  право низ лево  */
	}
.center1:hover{
		justify-content: center;
		align-items: center;
		float:top;	
                grid-row: 1;
		justify-content: center;
		align-items: left;
		border: solid 2px #CFBD16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
                margin: 0px  0px 0px 0px /*верх  право низ лево  */
	}
.i2{
		justify-content: center;
		align-items: center;
		float:center;	
		justify-content: center;
		align-items: center;
		border: solid 2px #AC9E16;
		width: 150px;
		height: 123px;
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
		width: 300px;
		height: 225px;
		background: white;
		border-radius: 25px;
		text-align: center;
		color:#CFBD16;
		font-size: 20px;
		padding: 20px 10px 10px 10px; 
	margin: -1px  10px 0 10px /*верх  право низ лево  */
	}
	.table
	{
		width=50px;
		font-size: 20px;
		
	}
	.i3{
		justify-content: center;
		align-items: center;
		float:left;	
		justify-content: center;
		align-items: center;
		border: solid 2px #AC9E16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: left;
		color:#AC9E16;
		font-size: 12px;
		padding: 8px 10px 10px 8px; 
                margin: 5px  8px 20px 10px /*верх  право низ лево  */
	}
        .i3:hover{
		justify-content: center;
		align-items: center;
		float:left;	
		justify-content: center;
		align-items: center;
		border: solid 2px #CFBD16;
		width: auto;
		height: auto;
		background: white;
		border-radius: 25px;
		text-align: left;
		color:#AC9E16;
		font-size: 12px;
		padding: 8px 10px 10px 8px; 
                margin: 5px  8px 20px 10px /*верх  право низ лево  */
	}
	.i3d{
		justify-content: center;
		align-items: center;
		float:center;	
		grid-row: 2;	
		justify-content: center;
		align-items: center;
		border: solid 0px #AC9E16;
		width: auto;
		height: auto;
		min-width: 1600px;
		background: white;
		border-radius: 25px;
		text-align: left;
		color:#AC9E16;
		font-size: 12px;
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
		text-align: left;
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
		text-align: left;
		color:#CFBD16;
		font-size: 20px;
		padding: 8px 10px 10px 8px; 
	margin: 5px  8px 20px 10px /*верх  право низ лево  */
	}
.h6 {
    text-align: center;
	font-size: 30px;
}
.red
{
    font-size: 20px;
    color:red;
}
</style>
<meta charset="utf-8" >

<title>Документ без названия</title>
</head>

<body>
	<div class="center"> 

		<div class="i3d">
<?php
			//установка часового пояса на сервере Московским
			date_default_timezone_set('Europe/Moscow'); 
	
	include('bd.php');
	//проверка лун из формы index6.php
        $key=$_POST['key'];
        $team="SELECT authoid FROM autho WHERE id=1";
        $autho=mysqli_query($conect, $team);
        $authoid=mysqli_fetch_array($autho);
         $bkey=$authoid['authoid'];
        /*    if($bkey!=$key)
        {
            echo "<a class='red' href='index6.php'  >KEY не верный. Вернитесь к форме заполенния.</a>"; exit;
        }
       */
 function preview($where, $namesave,$gt)
{
$source=$where; //наш исходник
if($gt==0)
{
$heightl=225; //параметр высоты превью
$widthl=300;  
}

if($gt==1)
{
$heightl=406; //параметр высоты превью
$widthl=602;  
$gt=0;
}
$sizel = getimagesize($source);//узнаем размеры картинки (дает нам масив size)
$formatl = strtolower(substr($sizel['mime'], strpos($sizel['mime'], '/')+1)); //определяем тип файла
//strtolower — Преобразует строку в нижний регистр
//substr — Возвращает подстроку
//strpos — Возвращает позицию первого вхождения подстроки
$icfunc = "imagecreatefrom" . $formatl;   //определение функции соответственно типу файла
//imagecreatefromjpeg — Создаёт новое изображение из файла или URL
//if (!function_exists($icfunc)) return false;  //если нет такой функции прекращаем работу скрипта
//function_exists — Возвращает true, если указанная функция определена
$x_ratio = $widthl / $sizel[0]; //пропорция ширины будущего превью
$y_ratio = $heightl / $sizel[1]; //пропорция высоты будущего превью
$ratio       = min($x_ratio, $y_ratio);
//min — Находит наименьшее значение
$use_x_ratio = ($x_ratio == $ratio); //соотношения ширины к высоте
$new_width   = $use_x_ratio  ? $widthl  : floor($sizel[0] * $ratio); //ширина превью 
//floor — Округляет дробь в меньшую сторону
$new_height  = !$use_x_ratio ? $heightl : floor($sizel[1] * $ratio); //высота превью
$new_left    = $use_x_ratio  ? 0 : floor(($widthl - $new_width) / 2); //расхождение с заданными параметрами по ширине
$new_top     = !$use_x_ratio ? 0 : floor(($heightl - $new_height) / 2); //расхождение с заданными параметрами по высоте
			
$met=strtolower(substr($source, strpos($source, '.')+1));
		
if ($formatl=='tiff')
{
	if($met=='cr2' or $met=='nef' or $met=='cr3' or $met=='tiff' or $met=='tif' or 'arw')
	{
//$met=='tiff' or $met=='tif' or $met=='NEF' or $met=='CR2' or $met=='CR3'
	//преобразование tiff в rgb
	
	//создание преью из tiff, cr2, nef с помощью imagick
	
	/* Чтение изображения */
	$imkv = new Imagick();
	//белый квадрат
	$imkv->newImage($widthl, $heightl, new ImagickPixel("white"));
	//$imkv->writeImage(__DIR__ . '/'.$namesave);
	//чтение изо
	$im = new Imagick( __DIR__ . '/'.$source);

	
	// преобразует cmyk в srgb
	if ($im->getImageColorspace() == Imagick::COLORSPACE_CMYK)
	{
		
		$im->transformImageColorspace(Imagick::COLORSPACE_RGB);
	}
	
	//преобразование изображения
	$im->thumbnailImage($new_width, $new_height);
//сложение изображений
	$imkv->compositeImage($im, imagick::COMPOSITE_OVER, $new_left, $new_top);
//увеличение яркости
	$imkv->brightnessContrastImage(5,5);
	
		$imkv->writeImage(__DIR__ . '/'.$namesave);
	
	return;	
	//thumbnailImage изменяет размер изображения
}
	
}

$imgl = imagecreatetruecolor($widthl,$heightl); //создаем вспомогательное изображение пропорциональное превью
$rgb = imagecolorallocate($imgl, 255, 255, 255);; //цвет заливки несоответствия
imagefill($imgl, 0, 0, $rgb); //заливаем его…
$photol = $icfunc($source); //достаем наш исходник
imagecopyresampled($imgl, $photol, $new_left, $new_top, 0, 0, $new_width, $new_height, $sizel[0], $sizel[1]); //копируем на него нашу превью с учетом расхождений

;// временно
imagejpeg($imgl, $namesave); //выводим результат (превью картинки)
//imagejpeg — Выводит изображение в браузер или пишет в файл
// Очищаем память после выполнения скрипта
imagedestroy($imgl);
//imagedestroy — Уничтожение изображения
imagedestroy($photol);
		
		}
		
	//обратно
	//$foo=str_ireplace("\;",";",$foo);
	//$foo=stripslashes($foo);

	//запись в базу данных имени папки

	//проверка имени папки
	if(isset($_POST['namefolder']) and !($_POST['namefolder']==" "))
	{
	$namefolder=$_POST['namefolder'];//имя папки
		
	//удаление html тегов
	$namefolder=strip_tags($namefolder);
	
	// экранирование спец символов . \ + * ? [ ^ ] ( $ )
	$namefolder=quotemeta ($namefolder);
	//экранирование ;
	$namefolder=str_ireplace(";","\;",$namefolder);
		//примерная защита от инекций
		//$namefolder= mysql_real_escape_string($namefolder); // экранирование спец символов 
		// mysqli_real_escape_string() 
		//$namefolder= htmlspecialchars($namefolder);//для защиты от html
		
	//убирание пробелов
	$foo1=str_ireplace(" ","",$namefolder);
	//случайное число
	$rand=rand(0,10000);
	$foo1=$foo1.$rand;
	$foo1=md5($foo1);
	//создание папки на диске
	mkdir("images/$foo1");
	}
	else 
	{
		echo "<a class='red' href='index6.php'  >Нет имени папки. Вернитесь к форме заполенния.</a>"; exit;
	}
		
	// Изменим структуру $_FILES
	foreach($_FILES['image'] as $key=>$value)
	{
		foreach ($value as $k=>$v)
		{
			$_FILES['image'][$k][$key]=$v;
		}
		//удалим старые ключи
		
		unset($_FILES['image'][$key]);
	}
	
	// предварительная проверка на расширение и удаление из массива
	foreach ($_FILES['image'] as $key =>$value)
	{
		
		if ( $value['type']!='application/octet-stream' and $value['type']!='image/jpeg' and $value['type']!='image/jpg' and $value['type']!='image/tif'  and $value['type']!='image/tiff' and $value['type']!='image/CR2' and $value['type']!= 'image/NEF' and $value['type']!='image/CR3' and $value['type']!= 'image/png' and $value['type']!= 'image/gif' and $value['type']!= 'image/bmp')
			
		{
			unset ($_FILES['image'][$key]);
		}
	}
		
	// вторая проверка на расширение и удаление из массива
	foreach ($_FILES['image'] as $key => $value)
	{
		$fi = finfo_open(FILEINFO_MIME_TYPE);
	$ftn= $value['tmp_name'];
	
 // Получим MIME-тип
$mime = (string) finfo_file($fi, $ftn);
		$l=strpos($mime, '/')+1;
		$mime= substr($mime, $l);
		
		
if ($mime !='jpg' and $mime !='jpeg'and  $mime !='tif'and $mime !='tiff'and $mime !='x-canon-cr2'and $mime !='x-canon-cr3'and $mime !='png'and $mime !='gif' and $mime !='x-ms-bmp' )
{
	
	unset ($_FILES['image'][$key]);
	
}
	//запись image/NEF вместо image/tiff для NEF
		$ll=mb_strtoupper(substr($value['name'], strpos($value['name'],'.')+1));
		
		if ($mime=='tiff' and $ll=='NEF')$_FILES['image'][$key]['type']='image/NEF';
		
		//запись image/CR2 вместо image/tiff для CR2
		if ($mime=='x-canon-cr2' and $ll=='CR2')$_FILES['image'][$key]['type']='image/CR2';
		
		//запись image/CR3 вместо image/tiff для CR3
		if ($mime=='x-canon-cr3' and $ll=='CR3')$_FILES['image'][$key]['type']='image/CR3';
		// не пропускает 'ARW' 
		if ($mime=='tiff' and $ll=='ARW')unset ($_FILES['image'][$key]);
		//cr2 которое записано как cr3
		if ($mime=='x-canon-cr2' and $ll=='CR3')$_FILES['image'][$key]['type']='image/CR3';
		
	}
	
	if ($_FILES['image']==NULL)
	{
		echo "<a class='red' href='index6.php'  >Файлы изображений не загружены. Вернитесь к форме заполенния.</a>"; exit;
	}
	
	//создание превью и проверка
	if ($_FILES['ifolder']['type']=='image/jpeg' or $_FILES['ifolder']['type']=='image/jpg') //если расширение jpg
	{
		$wayf=$_FILES['ifolder']['tmp_name'];
		
		//создание превью папки  на диске
		// переместить в temp 
		
		$namef3="1.jpg";
		$uploads_dir = 'temp/';
		//__DIR__ . "/images/$foo1/" . $name2 . $format
		move_uploaded_file($wayf, $uploads_dir.$namef3);
	
		// создать превью в папку  
		$where=$uploads_dir.$namef3;
		$namesave='images/'.$foo1.'/preview.jpg';
		preview ($where, $namesave,0);
		
		/*
$source=$uploads_dir.$namef; //наш исходник
$height=200; //параметр высоты превью
$width=200; //параметр ширины превью
$size = getimagesize($source);//узнаем размеры картинки (дает нам масив size)
$format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1)); //определяем тип файла
//strtolower — Преобразует строку в нижний регистр
//substr — Возвращает подстроку
//strpos — Возвращает позицию первого вхождения подстроки
$icfunc = "imagecreatefrom" . $format;   //определение функции соответственно типу файла
//imagecreatefromjpeg — Создаёт новое изображение из файла или URL
if (!function_exists($icfunc)) return false;  //если нет такой функции прекращаем работу скрипта
//function_exists — Возвращает true, если указанная функция определена
$x_ratio = $width / $size[0]; //пропорция ширины будущего превью
$y_ratio = $height / $size[1]; //пропорция высоты будущего превью
$ratio       = min($x_ratio, $y_ratio);
//min — Находит наименьшее значение
$use_x_ratio = ($x_ratio == $ratio); //соотношения ширины к высоте
$new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio); //ширина превью 
//floor — Округляет дробь в меньшую сторону
$new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio); //высота превью
$new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2); //расхождение с заданными параметрами по ширине
$new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2); //расхождение с заданными параметрами по высоте
$img = imagecreatetruecolor($width,$height); //создаем вспомогательное изображение пропорциональное превью
$rgb = imagecolorallocate($img, 255, 255, 255);; //цвет заливки несоответствия
imagefill($img, 0, 0, $rgb); //заливаем его…
$photo = $icfunc($source); //достаем наш исходник
imagecopyresampled($img, $photo, $new_left, $new_top, 0, 0, $new_width, $new_height, $size[0], $size[1]); //копируем на него нашу превью с учетом расхождений

$previewfolder='images/'.$foo1.'/preview.jpg';// временно
imagejpeg($img, $previewfolder); //выводим результат (превью картинки)
//imagejpeg — Выводит изображение в браузер или пишет в файл
// Очищаем память после выполнения скрипта
imagedestroy($img);
//imagedestroy — Уничтожение изображения
imagedestroy($photo);
		*/
                
	//удаление файла из временной папки
	$previewfolder='images/'.$foo1.'/preview.jpg';
	unlink ("temp/1.jpg");
	}
	else{
		echo "<a class='red' href='index6.php'  >Файлы изображения папки не загружен или тип не формата jpg. Вернитесь к форме заполенния.</a>"; exit;
	}
// удаление файла txt сесии
			$previewfolder1='txt/report recent files.txt';
if (file_exists($previewfolder1)) {unlink ($previewfolder1); } 
   
	
	//создание меню 
	$nns="'$namefolder','$foo1', '$previewfolder'";
$team="INSERT INTO `menu` ( `unamefolder`, `namefolder`, `previewfolder`) VALUES ($nns)";
	mysqli_query($conect, $team);
		
	$team="SELECT id FROM menu WHERE previewfolder='$previewfolder' and unamefolder='$namefolder'";
	
	$id=mysqli_query($conect, $team);
	
	//$id1 = mysqli_num_rows($id);// колличество строк выборки
	
	//защита от повотяемых файлов и папок
	$b=array();
			while ($a=mysqli_fetch_array($id) )
	{
		array_push($b,$a['id']);
		$max =max($b);
	}

	//linkcopy
	$team="UPDATE `menu` SET `linkcopy` = '$max' WHERE `menu`.`id` = $max";
	mysqli_query($conect, $team);
	$id=mysqli_query($conect, $team);
	$imgfoldername=$_FILES['ifolder']['name'];
	$quantity=0;// переменная кол-ва
	
	// Загружаем все картинки по порядку
	function datas($value2)
		{
$list = array(".01." => "января", ".02." => "февраля", 
".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
".07." => "июля", ".08." => "августа", ".09." => "сентября",
".10." => "октября", ".11." => "ноября", ".12." => "декабря");
			//str_replace — Заменяет все вхождения строки поиска на строку замены
			//strtotime — Преобразует текстовое представление даты
		
		$datap1=" Время: ".date("H:i:s", strtotime($value2));
	
		$datap=date("d.m.Y", strtotime($value2));// переворачивает дату
		
			$pieces = explode(".", $datap); // разбиваем значение по .
			$_mD = ".".$pieces[1]."."; //для замены
		
			$value2 = str_replace($_mD, " ".$list[$_mD]." ", $datap).$datap1; // меняю
	return($value2);
	}
	foreach($_FILES['image'] as $k=>$v)
	{
		echo'<div class="i3">';
		
		// загружаем по одному файлу
		$fileTmpName = $_FILES['image'][$k]['tmp_name'];
		
		//echo "Данные о загружаемом файле:</br></br>";
		$nameor=$_FILES['image'][$k]['name'];
		
		$echoname= mb_strtoupper($nameor);
		echo '</br> Имя файла: '.$echoname;
		
		//Форматирует число с разделением групп
		$sizeim=$_FILES['image'][$k]['size']/1048576;
		$sizeim=number_format($sizeim,3,".",'');
	
		$errorCode=$_FILES['image'][$k]['error'];
                
  // Проверим на ошибки
if ($errorCode !== 0)
  {
    // Массив с названиями ошибок
    $errorMessages = [
      UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
      UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
      UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
      UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
      UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
      UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
      UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
    ];
    // Зададим неизвестную ошибку
    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
    // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
    $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
    // Выведем название ошибки
    die($outputMessage);
  } 
		else
		{
   // echo 'Ошибок загрузки нет.'; // служебная
  }

$fi = finfo_open(FILEINFO_MIME_TYPE);
	
 // Получим MIME-тип
$mime = (string) finfo_file($fi, $fileTmpName);
		
$image = getimagesize($fileTmpName);
if ($_FILES['image'][$k]['type']=="image/NEF")
	{
		$wnef=round($image[0]*37.6, 1);
		$hnef=round($image[1]*33.4666, 1);
	}
$imagesize=getimagesize($fileTmpName);//getimagesize — Получение размера изображения
$name2 = md5_file($fileTmpName);
	if($_FILES['image'][$k]['type']=="image/CR3") $extension =".CR3";
	if($_FILES['image'][$k]['type']=="image/CR2") $extension =".CR2";
	if($_FILES['image'][$k]['type']=="image/NEF") $extension =".NEF";
	if($_FILES['image'][$k]['type']!="image/CR2" and $_FILES['image'][$k]['type']!="image/NEF")
	{
	 $extension = image_type_to_extension($imagesize[2]);
	}
$format = str_replace('jpeg', 'jpg', $extension);

	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/ARW") $format=".ARW";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/CR3") $format=".CR3";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/CR2") $format=".CR2";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/NEF") $format=".NEF";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/gif") $format=".gif";
if (!move_uploaded_file($fileTmpName, __DIR__ . "/images/$foo1/" . $name2 . $format)) {
  die('При записи изображения на диск произошла ошибка.');
}
echo '<p class="red"> Картинка успешно загружена!</p>' ;
$compnamef= $name2.$format;
$exifdata=@exif_read_data("images/$foo1/$name2$format",'IFD0'); // задается изображение и получает exif данные
//var_dump($exifdata);
$marray=array(array("Имя файла"=>"нет данных"), array("Имя файла на сервере"=>"нет данных"), array("Автор"=>"нет данных"),array("Дата съемки"=>"нет данных"),array("Модель камеры"=>"нет данных"),array("Диафрагма"=>"нет данных"),array("Выдержка"=>"нет данных"),array("ISO"=>"нет данных"),array("Фокусное расстояние объектива"=>"нет данных"),array("Экспокоррекция"=>"нет данных"),array("Светосила"=>"нет данных"),array("Изготовитель камеры"=>"нет данных"), array("Экспозамер"=>"нет данных"),array("Ширина изображения"=>"нет данных"), array("Высота изображения"=>"нет данных"), array("Программа экспозиции"=>"нет данных"),array("Размер изображения, байт"=>"нет данных"), array("Размер изображения, Мбайт"=>"нет данных"),array("Авторские права"=>"нет данных"));
	
	$type=$_FILES['image'][$k]['type'];
	
	if(isset($exifdata["FileName"])) $marray[0]["Имя файла"]=$nameor;
	if(isset($type) and $type == "image/gif" or $type=="image/png" or $type=="image/bmp") $marray[0]["Имя файла"]=$nameor;
	
	if(isset($exifdata["FileName"])) $marray[1]["Имя файла на сервере"]=$exifdata["FileName"];
	if(isset($type) and $type == "image/gif" or $type=="image/png" or $type=="image/bmp")$marray[1]["Имя файла на сервере"]=$name2.$format;
		
	if(isset($exifdata["Artist"])and trim($exifdata["Artist"])) $marray[2]["Автор"]=trim($exifdata["Artist"]);
if(isset($exifdata["DateTimeOriginal"]) ) // время для jpg
	{
$marray[3]["Дата съемки"]=datas($exifdata["DateTimeOriginal"]);

	}
elseif(!isset($exifdata["DateTimeOriginal"])) //время для cr2
	{
		$marray[3]["Дата съемки"]=datas($exifdata["DateTime"]);
	}
	
	//время для gif
if(isset($type) and $type == "image/gif" or $type=="image/png" or $type=="image/bmp")
	{
		$gifdata=stat("images/$foo1/$name2$format"); // считывает массив
		$giftime=$gifdata['ctime']; // определяет дату unix
		$giftime = date ("Y:m:d H:i:s.", $giftime); // переделывает в нормальный формат
		$marray[3]["Дата съемки"]=datas($giftime);
	}
	// время для tiff (нет EXIF)
if(!(isset($exifdata["DateTimeOriginal"]))and ($type == "image/tif" or $type=="image/tiff"))
	{
		$gifdata=stat("images/$foo1/$name2$format"); // считывает массив
		$giftime=$gifdata['ctime']; // определяет дату unix
                $giftime = date ("Y:m:d H:i:s.", $giftime); // переделывает в нормальный формат
		$marray[3]["Дата съемки"]=datas($giftime);
	}
	if(isset($exifdata["Model"]) and trim($exifdata["Model"])) $marray[4]["Модель камеры"]=trim($exifdata["Model"]);
	
        if(isset($exifdata["FNumber"]))
		{
		$value=$exifdata["FNumber"];
		$pieces = explode("/", $value); // разбиение строки по значению /
		$value=$pieces[0]/$pieces[1];
		$marray[5]["Диафрагма"]=$value; 
	}
        
if(isset($exifdata["ExposureTime"]))
        {
             //если есть дробное число в выдержке
             $trt=$exifdata["ExposureTime"];
             $f=strpos($trt, "/");
              if($f)
                {
                 $ll2=explode("/",$trt);
                 if($ll2[1]>$ll2[0])
                    {
                        $tt=$ll2[1]/$ll2[0]; $tt= round($tt);
                        $mm=$ll2[0]/$ll2[0]; 
                        $log="$mm/$tt";
                    }
                    else 
                    {
                        if($ll2[1]!=1)
                        {
                            $tt=$ll2[0]/$ll2[1]; $tt= round($tt,1);
                            $log=$tt;
                        }
                        else
                        {
                               $log=$ll2[0]; 
                        }
                        
                        
                    }
                     $marray[6]["Выдержка"]=$log;
                }     
                 else 
                       {
                        $log=$trt; echo "ggg";
                       }
             $marray[6]["Выдержка"]=$log;
     }
            
        
        //ISO
if(isset($exifdata["ISOSpeedRatings"]))
{
    if(is_array($exifdata["ISOSpeedRatings"]))
    {
        $marray[7]["ISO"]=$exifdata["ISOSpeedRatings"][0];
    }
    else
    {
        $marray[7]["ISO"]=$exifdata["ISOSpeedRatings"];
    }
}
    
if(isset($exifdata["FocalLength"])) 
	{
		$value=$exifdata["FocalLength"];
		$pieces = explode("/", $value); // разбиение строки по значению /
		$value=$pieces[0]/$pieces[1];
		
		$marray[8]["Фокусное расстояние объектива"]=$value;
	}
        
        //значение экспокоррекции
if(isset($exifdata["ExposureBiasValue"]))
{
        $ex1=$exifdata["ExposureBiasValue"];
    //$marray[9]["Экспокоррекция"]=

    //проверка на /
    if(strpos($ex1,'/'))
    {
        $exvalw=explode("/",$ex1);

        // проверка на 0.1 1.0 0.
        if(abs($exvalw[0]) and abs($exvalw[1]))
        {
            $exval=$exvalw[0]/$exvalw[1];

        //проверка на значения выдержки кратно 0.333
            $ggh=$exval/0.33333;
            $ggh=round($ggh,2);

        //дробный остаток от деления
            if(fmod($ggh,1)==0)
                {
                //определяет знак
                if ($exval<0 and 0<-$exval and 1>-$exval)
                        {
                        $znak='-';
                        }
                        else if($exval>0){
                        $znak='+';
                        }

                        // проверка на 1 
                        if ($exval==1 or $exval==-1)
                        {
                            $e=$znak.$exval;
                            $marray[9]["Экспокоррекция"]=$e;
                        }
                        else
                        {
                            //вычисление дробной части
                            $exval=explode(".",$exval);
                            $exval2='0.'.$exval[1];
                            $i=round($exval2,2);
                            switch($i)
                            {
                                case (0.33):
                                    $e='1/3';
                                    break;
                                case (0.67):
                                    $e='2/3';
                                    break;
                                default:
                                    $e=$exval[1];
                            }

                            // проверка челой части 0 или нет
                            if($exval[0]!=0)
                            {
                                $e=$znak.$exval[0].' '.$e;
                            }
                            else 
                            {
                                $e=$znak.' '.$e; 
                            }
                            $marray[9]["Экспокоррекция"]=$e;
                        }
                }
                 else 
                    {
                       if (abs($exval)>=0 and abs($exval)<=7)
                       {
                           $e=round($exval,2);

                       }
                        else {
                            $e='нет данных';
                        }

                       $marray[9]["Экспокоррекция"]=$e;
                    }        


        }
       else
       //когда есть 0
        {
         $marray[9]["Экспокоррекция"]=0;
        }
    }
    else
    {
     //когда нет /
    $ex1=round($ex1,1); 

    //определение знака
        if ($ex1>0)
        {
            $znak='+';
        }
           elseif(abs($ex1)>0 and abs($ex1)<1)
        {
           $znak='-'; 
        }
        else $znak=''; 

     //дробное или нет число 
      if(strpos($ex1,'.'))
        {
            $exval3=explode(".",$ex1);

             //есть ли в значении 0
            if($exval3[0]==0 or $exval3[1]==0)
            {
                //округление чила до 0.1    
                $ex1=round($ex1,1); 

                //представление дробного числа между 0 и 1
                   if($exval3[0]==0)
                {
                    $e="$znak $exval3[1]/10";
                }
                elseif($exval3[1]==0)
                {
                    $e="$znak $exval3[0]";
                }
            }
            else
                {
                    //представление дробного числа больше 1
                    $e="$znak $exval3[0] $exval3[1]/10";
                }
        }
     else //если число целое
        {
            $e=$znak.$ex1;
        }
        $marray[9]["Экспокоррекция"]=$e;
    }
}
        
if(isset($exifdata["MaxApertureValue"]) or isset ($exifdata["ApertureValue"]))
{
if (isset ($exifdata["MaxApertureValue"]))
	{
	$value=$exifdata["MaxApertureValue"];
	}
        else{
         $value=	$exifdata["ApertureValue"];
          }
$pieces = explode("/", $value); // разбиение строки по значению /
$value=$pieces[0]/$pieces[1];
$marray[10]["Светосила"]=$value;              
}
if(isset($exifdata["Make"]) and trim($exifdata["Make"])) $marray[11]["Изготовитель камеры"]=trim($exifdata["Make"]);
if(isset($exifdata["MeteringMode"]))
$expo=$exifdata["MeteringMode"];
switch ($expo) 
	{
    case 0:
         $expo = "Нет данных";
        break;
    case 1:
         $expo = "Усредненный";
        break;
    case 2:
         $expo = "Средневзвешенный";
        break;
	case 3:
         $expo = "Точечный";
        break;
    case 4:
         $expo = "Многоточечный";
        break;
    case 5:
         $expo = "По шаблону";
        break;
    case 6:
        $expo = "Частичный";
        break;
    }
	$marray[12]["Экспозамер"]=$expo; 
	if(isset($exifdata["ExifImageWidth"]) or isset($exifdata["ImageWidth"]) )
	{
		if(isset($exifdata["ExifImageWidth"]))
		{
			$marray[13]["Ширина изображения"]=$exifdata["ExifImageWidth"];
		}
		elseif (isset($exifdata["ImageWidth"])) $marray[13]["Ширина изображения"]=$exifdata["ImageWidth"];
	}
		//для gig
	if(isset($type) and $type == "image/gif" or $type=="image/png" or $type=="image/bmp")
	{
		$marray[13]["Ширина изображения"]=$image[0];
		
		$marray[14]["Высота изображения"]=$image[1];
	}
	//ширина и высота для nef
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/NEF")
	{
		$marray[13]["Ширина изображения"]=$wnef;
		$marray[14]["Высота изображения"]=$hnef;
	}

        if(isset($exifdata["ExifImageLength"]) or isset($exifdata["ImageLength"]) )
	{
		if(isset($exifdata["ExifImageLength"]))
		{
			$marray[14]["Высота изображения"]=$exifdata["ExifImageLength"];
		}
		elseif (isset($exifdata["ImageLength"])and $_FILES['image'][$k]['type']!="image/NEF") $marray[14]["Высота изображения"]=$exifdata["ImageLength"];
	}
		if(isset($exifdata["ExposureProgram"])) 	
	{
		$value=$exifdata["ExposureProgram"];
		switch ($value)
		{
    case 0:
         $value = "нет данных";
        break;
    case 1:
         $value = "Вручную";
        break;
    case 2:
         $value = "Обычный";
        break;
	case 3:
         $value = "Приоритет диафрагмы";
        break;
    case 4:
         $value = "Приоритет выдержки";
        break;
    case 5:
         $value = "Художественная съемка";
        break;
	case 6:
        $value = "Спортивная съемка";
        break;
	case 7:
        $value = "Портретный режим";
        break;
	case 8:
        $value = "Пейзажный режим";
        break;
		
	default:
			$value = "нет данных";
		}
		
		$marray[15]["Программа экспозиции"]=$value;			
	}
	if(isset($type) and $type == "image/gif" or $type=="image/png" or $type=="image/bmp")
	{
		$marray[16]["Размер изображения, байт"]=$_FILES['image'][$k]['size'];
		$sizeim=$_FILES['image'][$k]['size']/1048576;
		$sizeim=number_format($sizeim,3,".",'');
		$marray[17]["Размер изображения, Мбайт"]=$sizeim;
	}
	//if(isset($exifdata["FileSize"])) $marray[15]["Размер изображения"]=$exifdata["FileSize"]/1048576;	
	if(isset($exifdata["FileSize"])) $marray[16]["Размер изображения, байт"]=$exifdata["FileSize"];
	
	$sizeim=$exifdata["FileSize"]/1048576;
		$sizeim=number_format($sizeim,3,".",'');

                if(isset($exifdata["FileSize"])) $marray[17]["Размер изображения, Мбайт"]=$sizeim;	
	//1048576)." Мбайт";
	// короткая запись if
	//if($i=="DateTimeOriginal")($value!=null) ? $marray[1]["Дата съемки"]=$value : $marray[1]["Дата съемки"]="нет данных";;
	if(isset($exifdata["Copyright"])and trim($exifdata["Copyright"])) $marray[18]["Авторские права"]=trim($exifdata["Copyright"]);	

//jpg файл без данных
		
		if($type=="image/jpg" or $type=="image/jpeg")
		{
			if(!isset($exifdata["DateTimeOriginal"]) and !isset($exifdata["DateTime"]))
		{
		
				echo "<p  class='red'>Мало EXIF данных!</p>";
				$gifdata=stat("images/$foo1/$name2$format"); // считывает массив
		$giftime=$gifdata['ctime']; // определяет дату unix
		
			$giftime = date ("Y:m:d H:i:s.", $giftime); // переделывает в нормальный формат
		
		$marray[3]["Дата съемки"]=datas($giftime);
				
				$marray[13]["Ширина изображения"]=$image[0];
		
		$marray[14]["Высота изображения"]=$image[1];
		$marray[0]["Имя файла"]=$nameor;	
				$marray[1]["Имя файла на сервере"]=$name2;
			$marray[16]["Размер изображения, байт"]=$_FILES['image'][$k]['size'];
		$sizeim=$_FILES['image'][$k]['size']/1048576;
		$sizeim=number_format($sizeim,3,".",'');
		$marray[17]["Размер изображения, Мбайт"]=$sizeim;
		}
		}
		
		// асоциативный массив в одномерный
	
		$marray1=$marray;
		unset($marray1[1]);
		
		$e=0;
		foreach($marray1 as $wu)
			foreach ($wu as $lu=>$ku)
		{
			$marraycopy[$e]=$ku;
			$e++;
		}
	
//созание превью функцией 200*200
		$where="images/$foo1/" . $name2 . $format;
                $namesave="images/$foo1/$name2".'P.jpg';
                preview ($where, $namesave, 0);
                $previewf="images/$foo1/".$name2.'P.jpg';
		array_unshift($marraycopy, $previewf);
                
//созание превью функцией 500*500
$namesave1="images/$foo1/$name2".'PBIG.jpg';
preview ($where, $namesave1,1);
$previewf1="images/$foo1/".$name2.'PBIG.jpg';

//имя  файла на компьюетре
array_unshift($marraycopy, $compnamef);

//обозначение папки
$linkf="$max";
array_unshift($marraycopy, $linkf);

//запись в массив pbig
array_unshift($marraycopy, $previewf1);
//обозначение папки
echo "<img class='i2' src='$namesave' width='300' height = '300'></br>";
$marraycopy= implode("', '", $marraycopy);//массив в строку
$marraycopy="'".$marraycopy."'";
$team="INSERT INTO tablefiles (`pbig`,`linkf`, `compnamef`, `previewf`,`namef`, `author`, `sdata`, `mcamera`, `diafragme`, `excerpt`, `iso`, `focus`, `expo`, `aperture`, `manufacturer`, `expomet`, `width`, `height`, `program`, `sizefb`, `sizefmb`, `copyright`) VALUES ($marraycopy)";	
mysqli_query($conect, $team);
	
	$fp = fopen("txt/report on all files.txt", "a");
		$fp1=fopen("txt/report recent files.txt", "a");
		$timedata=date('d-m-Y H:i:s');
		$text="\n Дата записи файла: $timedata \n";
		fwrite($fp, $text);
		fwrite($fp1, $text);
	
	//вывод на экран в соответствии со значением 0,1...итд
$result = count($marray);

	for ($i=0;$i<$result;$i++)
	{	foreach($marray[$i] as $m=>$value1)
		echo "</br>".$m." ".$value1;
	 $text=$m.":	".$value1."\n";
	fwrite($fp, $text);
	 fwrite($fp1, $text);
	}
		
fclose($fp);
		fclose($fp1);
		$quantity++;
	unset($marraycopy);
		echo '</div>';
	}
	// копия файлов
	
	//кол-во фалов
	$team="UPDATE `menu` SET `quantity` = '$quantity' WHERE `menu`.`linkcopy` = $max";
	mysqli_query($conect, $team);
	//$sumsizefb в menu
	
	$team="SELECT SUM(sizefb) FROM tablefiles WHERE linkf='$max'";
	
	$sumsizefb=mysqli_query($conect, $team);
	$sumsizefb=mysqli_fetch_array($sumsizefb);
	$a=$sumsizefb["SUM(sizefb)"];
	//$sumsizefmb в menu
	$team="SELECT SUM(sizefmb) FROM tablefiles WHERE linkf='$max'";
	$sumsizefmb=mysqli_query($conect, $team);
	$sumsizefmb=mysqli_fetch_array($sumsizefmb);
	$b=$sumsizefmb["SUM(sizefmb)"];
	$b=round($b, 3);
	//запись в в menu
	$team="UPDATE `menu` SET sizepb=$a, sizepmb=$b WHERE `menu`.`linkcopy` = $max";
	$sum=mysqli_query($conect, $team);
	
        // изменения key
        $ran= random_int(1, 1000000);
        $ran= md5($ran);
        $team="UPDATE `autho` SET `authoid` = '$ran' WHERE `autho`.`id` = '1'";
        $auto=mysqli_query($conect, $team);
	?>
	
</div>
		<div class="center"><div class="center1">
			<table  border='0'>
  <tr>
 <?php 
$team="SELECT namef FROM tablefiles WHERE linkf='$max'";
$namefv=mysqli_query($conect, $team);
$col = mysqli_num_rows($namefv);
echo "<a  style='color:green' href='txt/report recent files.txt' download>Сохранить отчет последней загрузки(формат TXT)</a></br>";
echo "<a style='color:green' href='txt/report on all files.txt' download>Сохранить отчет загрузки за все время (формат TXT)</a></br>";
echo "<a class='red' href='index6.php'  > Вернуться к форме загрузки файлов.</a>";
echo "</br><a class='red' href='index.php'  > Вернуться к сайту.</a>";
echo "<p class='h4'color='green' >Успешно загружены фалы ($col шт.) : </br>Папка: $namefolder</p>";
$sc=0; $gal='<img src="gall_green.jpg">';
while ($a=mysqli_fetch_array($namefv))
{
$sc++;
echo "<td width='300' align='center'>".$gal,$a['namef'].'</td>';
if ($sc==4)
    {
	echo "</tr><tr>";
	$sc=0;
    }
}
?>
</tr></table></div></div>
</div>
	
</body>
</html>