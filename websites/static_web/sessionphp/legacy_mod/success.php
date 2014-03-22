<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();
$mytimeout = 6;
session_set_cookie_params($mytimeout);
// flush out the session_id
session_cache_expire($mytimeout / 60);
ini_set('session.gc_maxlifetime', $mytimeout);


echo 'this is the session_Id:' .session_id()."<br>";
echo "Bonjour" . $_SESSION['surname'];
echo'<a href="../legacy_mod/success.php?ga='.session_id().'">log out here</a>';
$sess = session_id();

if (isset($_GET['ga'])){
  session_unset($sess);
  echo "Session has been destroyed";
  $local = "../legacy_mod/login.php";
  header("Location:".$local);
}


?>
</body>
</html>
