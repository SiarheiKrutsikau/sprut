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
		height: 150px;
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
		height: 300px;
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
	<!--	После отправки файла PHP-скрипту upload.php его можно перехватить с помощью суперглобальной переменной $_FILES с таким же именем, которая в массиве содержит информацию о файле (в нашем случае image):   var_dump($_FILES); -->
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
            if($bkey!=$key)
        {
            echo "<a class='red' href='index6.php'  >KEY не верный. Вернитесь к форме заполенния.</a>"; exit;
        }
       
		
 
 function preview($where, $namesave)
		{
			
			$source=$where; //наш исходник
$heightl=300; //параметр высоты превью
$widthl=300; //параметр ширины превью
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
		preview ($where, $namesave);
		
	
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
		
		
		
		
		
		//$dataiz=filectime ($_FILES['image']['tmp_name'] ); //возвращает последюю дату изменения файла в формате unix
		//echo basename ($_FILES['image']['tmp_name'] );//Возвращает последний компонент имени из указанного пути (имя файла с расширением)
	//	echo  dirname ($_FILES['image']['tmp_name'] );//возвращает католог из указанного пути
	//	echo "sdf".is_uploaded_file ($_FILES['image']['tmp_name'] );//Определяет, был ли файл загружен при помощи HTTP POST
		
		
		//echo "sssssss".($image[bits] ); // Возвращает информацию о файле или символической ссылке
		
	
		
		//echo date ("F d Y H:i:s.", $dataiz);
	//дата изменения файла
	
		
		//english_format_number = number_format($number, 2, '.', '');
/*
	Array
(
  [name]     => image.jpg                // оригинальное имя файла
  [type]     => image/jpeg                 // MIME-тип файла
  [tmp_name] => home\user\temp\phpD07E.tmp // бинарный файл
  [error]    => 0                          // код ошибки
  [size]     => 17170                      // размер файла в байтах
)
	*/
	      
	
	// Получаем нужные элементы массива "image"
 // $fileTmpName = $_FILES['image']['tmp_name'];//- для одного файла
  //$errorCode = $_FILES['image'][$k]['error'];
		$errorCode=$_FILES['image'][$k]['error'];
  // Проверим на ошибки
  //if ($errorCode !== '0' || !is_uploaded_file($fileTmpName))
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
	
	//$_FILES['image'] - массив данных файла
	/* Array
(
  [name]     => image.jpg                // оригинальное имя файла
  [type]     => image/jpeg                 // MIME-тип файла
  [tmp_name] => home\user\temp\phpD07E.tmp // бинарный файл
  [error]    => 0                          // код ошибки
  [size]     => 17170                      // размер файла в байтах
)
Не всем данным из $_FILES можно доверять: MIME-тип и размер файла можно подделать, т. к. они формируются из HTTP-ответа, а расширению в имени файла не стоит доверять в силу того, что за ним может скрываться совершенно другой файл. Тем не менее, дальше нам нужно проверить корректно ли загрузился наш файл и загрузился ли он вообще. Для этого необходимо проверить ошибки в $_FILES['image']['error'] и удостовериться, что файл загружен методом POST с помощью функции is_uploaded_file(). Если что-то идёт не по плану, значит выводим ошибку на экран:
*/
	// продолжение загрузки
	/* Для того, чтобы "редиска" не загрузил вредоносный код, встроенный в изображение, нельзя доверять функции getimagesize(), которая также возвращает MIME-тип. Функция ожидает, что первый аргумент является ссылкой на корректный файл изображения. Определить настоящий MIME-тип картинки можно через расширение FileInfo. Код ниже проверит наличие ключевого слова image в типе нашего загружаемого файла и если его не окажется, выдаст ошибку: */
		//echo "Ghbdhdhdh";
	//По настоящему проверяем тип файла

	// Создадим ресурс FileInfo 
$fi = finfo_open(FILEINFO_MIME_TYPE);
	
	//echo "dd".$fi;
 // Получим MIME-тип
$mime = (string) finfo_file($fi, $fileTmpName);
		// Проверим ключевое слово image (image/jpeg, image/png и т. д.)
//if (strpos($mime, 'image') === false) die ('<p style="color: red"> Можно загружать только изображения!</p>');
	
	//печать изображения
	//exif_thumbnail - запрашивает внедрённый уменьшенный вариант эскиза изображения TIFF или JPEG.

	//полный путь к загрузке файла
	
//$NameOriginal = $_FILES["image"]['name'];
//$Typo_Image = $_FILES["image"]['type'];
//$name_Temp = $_FILES["image"]['tmp_name'], 'r'; 
	
//$image =$_FILES['image'];
		

	

	

	
	// получение доп сведений об изображении getimagesize() ПОЛУЧЕНИЕ РАЗМЕРА ИЗОБРАЖЕНИЯ
// Результат функции запишем в переменную
$image = getimagesize($fileTmpName);
	
	
	if ($_FILES['image'][$k]['type']=="image/NEF")
	{
		$wnef=round($image[0]*37.6, 1);
		$hnef=round($image[1]*33.4666, 1);
	
	}
	
	
	
	
	
	
	
	
	
	
	
/*Результат
Array
(
  [0]        => 1280                      // ширина
  [1]        => 768                       // высота
  [2]        => 2                         // тип
  [3]        => width="1280" height="768" // атрибуты для HTML
  [bits]     => 8                         // глубина цвета
  [channels] => 3                         // цветовая модель
  [mime]     => image/jpeg                // MIME-тип
)
	*/
	//Глобальный массив $_FILES содержит всю информацию о загруженных файлах. 
/*	$_FILES['userfile']['name']
Оригинальное имя файла на компьютере клиента.
		$_FILES['userfile']['type']
Mime-тип файла, в случае, если браузер предоставил такую информацию. В качестве примера можно привести "image/gif". Этот mime-тип не проверяется на стороне PHP, так что не полагайтесь на его значение без проверки.
		$_FILES['userfile']['size']
Размер в байтах принятого файла.
		$_FILES['userfile']['tmp_name']
Временное имя, с которым принятый файл был сохранён на сервере.
		$_FILES['userfile']['error']
Код ошибки, которая может возникнуть при загрузке файла. */
	
	
	
	
	
// Проверка изображения по размерам если необходимо
	
//для вычисления размера применим функцию filesize() для бинарного файла из временной папки)
$imagesize=getimagesize($fileTmpName);//getimagesize — Получение размера изображения
		//$fileTmpName  это $fileTmpName = $_FILES['image']['tmp_name'];
/*
// Зададим ограничения для картинок
$limitBytes  = 1024 * 1024 * 5;
$limitWidth  = 1280;
$limitHeight = 768;
 // Проверим нужные параметры
if (filesize($fileTmpName) > $limitBytes) echo "</br>Размер изображения не должен превышать 5 Мбайт.";
if ($imagesize[0] > $limitWidth) echo "</br>Ширина изображения не должна превышать 1280 точек.";
if ($imagesize[1] > $limitHeight) echo "</br>Высота изображения не должна превышать 768 точек.";
*/
	
	// После всех проверок мы можем с уверенностью переместить наш загружаемый файл в какую-нибудь директорию с картинками. 
	//Делать лучше это через функцию move_uploaded_file(), которая работает в безопасном режиме.
	//Перед перемещением файла нельзя забыть сгенерировать случайное имя и расширение из типа изображения для нашего файла. Вот так это выглядит:
	
	// Сгенерируем новое имя файла на основе MD5-хеша
	//md5_file — Возвращает MD5-хеш файла. Хеш представляет собой 32-значное шестнадцатеричное число.
	//хешей MD5 позволяет зашифровать ваши данные. Вы также можете загрузить свой файл и получить его контрольную сумму MD5. С помощью ключа HMAC вы можете увеличить безопасность вашего пароля MD5.
	// чтобы файл дошел
	//Владелец файла считает контрольную сумму рабочего файла (по MD5, например);
//Загружает файл на публичное хранилище и передает контрольную сумму получателю файла;
//Получатель файла скачивает файл, считает его контрольную сумму на своей стороне и сверяет ее с //оригинальной, которую посчитал владелец файла;
	//Контрольная сумма - результат некой хэш – функции. 
	// Это функция, которая получает на вход массив данных, «прокручивает» эти данные по определенному алгоритму и дает на выходе битовую строку, длина которой задана заранее.
	
	// Чтение информации из EXIF файла
	
$name2 = md5_file($fileTmpName);
// echo "</br> Новое имя:".$name2; 
 
//Сгенерируем расширение файла на основе типа картинки
//image_type_to_extension — Получение расширения файла для типа изображения в данном случае jpeg
	
	if($_FILES['image'][$k]['type']=="image/CR3") $extension =".CR3";
	if($_FILES['image'][$k]['type']=="image/CR2") $extension =".CR2";
	if($_FILES['image'][$k]['type']=="image/NEF") $extension =".NEF";
	if($_FILES['image'][$k]['type']!="image/CR2" and $_FILES['image'][$k]['type']!="image/NEF")
	{
	 $extension = image_type_to_extension($imagesize[2]);
	}
			
		//echo "</br>Новое расширение:".$extension;
// Сократим .jpeg до .jpg
	//str_replace — Функция str_replace ищет в строке заданный текст и меняет его на другой.
	//Есть также функция str_ireplace, которая делает тоже самое, но без учета регистра.
	//str_replace(что меняем, на что меняем, где меняем);
$format = str_replace('jpeg', 'jpg', $extension);
		 //echo $format;
// Переместим картинку с новым именем и расширением в папку /upload
	//move_uploaded_file — Перемещает загруженный файл в новое место
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/ARW") $format=".ARW";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/CR3") $format=".CR3";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/CR2") $format=".CR2";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/NEF") $format=".NEF";
	if(isset($_FILES['image'][$k]['type']) and $_FILES['image'][$k]['type']=="image/gif") $format=".gif";
if (!move_uploaded_file($fileTmpName, __DIR__ . "/images/$foo1/" . $name2 . $format)) {
  die('При записи изображения на диск произошла ошибка.');
}

	
//echo "</br>".$name2.$format;

	echo '<p class="red"> Картинка успешно загружена!</p>' ;
	$compnamef= $name2.$format;
/*	$width=200;//$image[0]/10; 
	$height=150;//$image[1]/10; 
	echo "<img src='$namesave' width='$width' height = '$height'>";
	
	*/
	

$exifdata=@exif_read_data("images/$foo1/$name2$format",'IFD0'); // задается изображение и получает exif данные

	
	
	$marray=array(array("Имя файла"=>"нет данных"), array("Имя файла на сервере"=>"нет данных"), array("Автор"=>"нет данных"),array("Дата съемки"=>"нет данных"),array("Модель камеры"=>"нет данных"),array("Диафрагма"=>"нет данных"),array("Выдержка"=>"нет данных"),array("ISO"=>"нет данных"),array("Фокусное расстояние объектива"=>"нет данных"),array("Экспокоррекция"=>"нет данных"),array("Светосила"=>"нет данных"),array("Изготовитель камеры"=>"нет данных"), array("Экспозамер"=>"нет данных"),array("Ширина изображения"=>"нет данных"), array("Высота изображения"=>"нет данных"), array("Программа экспозиции"=>"нет данных"),array("Размер изображения, байт"=>"нет данных"), array("Размер изображения, Мбайт"=>"нет данных"),array("Авторские права"=>"нет данных"));
	//просмотр массива для себя и создание своего массива 

	//if($i=="FileName")($value!=null) ? $marray[0]["Имя файла"]=$value : $marray[0]["Имя файла"]="нет данных";;
	
	/*
	echo $exifdata["FileDateTime"];
	echo date ("F d Y H:i:s.", $exifdata["FileDateTime"]);
	*/
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
		//var_dump($gifdata) ;
		$giftime=$gifdata['ctime']; // определяет дату unix
		//$giftime=$mtime;
		
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
	 
	
	if(isset($exifdata["ExposureTime"])) $marray[6]["Выдержка"]=$exifdata["ExposureTime"];
	
	if(isset($exifdata["ISOSpeedRatings"])) $marray[7]["ISO"]=$exifdata["ISOSpeedRatings"];
	
	if(isset($exifdata["FocalLength"])) 
	{
		$value=$exifdata["FocalLength"];
		$pieces = explode("/", $value); // разбиение строки по значению /
		$value=$pieces[0]/$pieces[1];
		
		$marray[8]["Фокусное расстояние объектива"]=$value;
	}

	
	if(isset($exifdata["ExposureBiasValue"]))
	{
		if 	($exifdata["ExposureBiasValue"]!="0/1")
			 {
				 $r=$exifdata["ExposureBiasValue"];
					$zn=explode("/",$r);
			$zn=$zn[0]/$zn[1];
					$zn=number_format($zn,1,".",''); 
			$marray[9]["Экспокоррекция"]=$zn;
			 }
		else $marray[9]["Экспокоррекция"]=0;
		
		$sizeim=number_format($sizeim,3,".",'');
		
	}
	
	
	if(isset($exifdata["MaxApertureValue"]) or isset ($exifdata["ApertureValue"])) 
		{
		$value=$exifdata["MaxApertureValue"];
		if (isset ($exifdata["ApertureValue"]))
			{
				$value=$exifdata["ApertureValue"];
			
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
	// 
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
	
		
		
		//созание превью функцией
		$where="images/$foo1/" . $name2 . $format;
		
		$namesave="images/$foo1/$name2".'P.jpg';
	
		preview ($where, $namesave);
	
		$previewf="images/$foo1/".$name2.'P.jpg';
		array_unshift($marraycopy, $previewf);
		
		//имя  файла на компьюетре
		
		array_unshift($marraycopy, $compnamef);
		//обозначение папки
		$linkf="$max";
		array_unshift($marraycopy, $linkf);
		
		echo "<img class='i2' src='$namesave' width='300' height = '300'></br>";
	
		
		$marraycopy= implode("', '", $marraycopy);//массив в строку
		$marraycopy="'".$marraycopy."'";
		
$team=	"INSERT INTO tablefiles (`linkf`, `compnamef`, `previewf`,`namef`, `author`, `sdata`, `mcamera`, `diafragme`, `excerpt`, `iso`, `focus`, `expo`, `aperture`, `manufacturer`, `expomet`, `width`, `height`, `program`, `sizefb`, `sizefmb`, `copyright`) VALUES ($marraycopy)";
		
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
		
		
	//создание тестового файла
	// строка, которую будем записывать

 
// открываем файл, если файл не существует,
//делается попытка создать его

 
// записываем в файл текст

 
// закрываем
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
	 
	  		
		echo "<a  style='color:green' href='txt\report recent files.txt' download>Сохранить отчет последней загрузки(формат TXT)</a></br>";
	  echo "<a style='color:green' href='txt\report on all files.txt' download>Сохранить отчет загрузки за все время (формат TXT)</a></br>";
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