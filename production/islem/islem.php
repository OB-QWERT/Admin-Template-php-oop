<?php 


require_once "baglan.php";


if (isset($_POST["filmBtn"])) {
	
$filminadi   = $_POST["filminadi"];
$filminkonusu = $_POST["filminkonusu"];
$filminturu = $_POST["filminturu"];
$yonetmen = $_POST["yonetmen"];
$puan = $_POST["puan"];


$durum=1;

$filmkaydet=$db->prepare("INSERT INTO film SET
	filmad=:filmad,
	filmkonu=:filmkonu,
	filmtur=:filmtur,
	yonetmen=:yonetmen,
	puan=:puan,
	durum=:durum");
$insert=$filmkaydet->execute(array(
'filmad' =>$filminadi,
'filmkonu' =>$filminkonusu,
'filmtur' =>$filminturu,
'yonetmen'=>$yonetmen,
'puan' =>$puan,
'durum'=>$durum,

));

if ($insert) {
	
header("Location:../menu.php?durum=menueklendi");
}else{


	header("Location:../menu.php?durum=hata");
}
   

}



if (isset($_POST["filmguncelleBtn"])) {

$filminadi   = $_POST["filminadi"];
$filminkonusu = $_POST["filminkonusu"];
$filminturu = $_POST["filminturu"];
$yonetmen = $_POST["yonetmen"];
$puan = $_POST["puan"];
$filmid = $_POST["filmid"];


$filmguncelle=$db->prepare("UPDATE film SET
	filmad=:filmad,
	filmkonu=:filmkonu,
	filmtur=:filmtur,
	yonetmen=:yonetmen,
	puan=:puan
	WHERE id=$filmid");


$update=$filmguncelle->execute(array(
	'filmad'=> $filminadi,
	'filmkonu'=> $filminkonusu,
	'filmtur'=> $filminturu,
	'yonetmen'=> $yonetmen,
	'puan'=> $puan
));




if ($update) {
	
header("Location:../film.php?durum=filmguncellendi");
}else{


	header("Location:../film.php?durum=hata");
}	

 
}
if ($_GET["id"]) {
	

$gelen=$_GET["id"];

$filmsil=$db->prepare("DELETE FROM film WHERE id=:id");
$sonuc=$filmsil->execute(array('id'=>$gelen));


if ($sonuc) {
	
header("Location:../film.php?durum=filmsilindi");
}else{


	header("Location:../film.php?durum=hata");
}	



}





 ?>