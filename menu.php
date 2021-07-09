<?php
include('bd.php');
$team="SELECT unamefolder, namefolder,linkcopy FROM menu";
$dfoldermenu=mysqli_query($conect, $team);               
while($menu=mysqli_fetch_array($dfoldermenu))
{
 echo "<a href='index2.php?lc=$menu[linkcopy]'>$menu[unamefolder]</a></br>";
}

?>

