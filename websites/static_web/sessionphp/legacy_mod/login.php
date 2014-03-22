<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
session_start();
echo '<form><input type="text" name="nam" size="32"><br>
       <input type="submit" name="trigger" value="Trigger Session"></form>';
	   
	   
if (isset($_GET['nam'])){
//this is the Starting of the Session.
session_save_path(realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '../session_file'));
$sess_name=session_name('thisis34sessname');




$_SESSION['name'] = 'joshua';
$_SESSION['surname'] = 'kula ntete';
echo "this is the session Id :".session_id();



$sucess="../legacy_mod/success.php";
header("Location: ". $sucess );

}
?>
</body>
</html>
