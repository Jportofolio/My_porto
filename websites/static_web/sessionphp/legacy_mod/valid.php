<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
// CREATING A GUI..FOR A USER..
echo '<form action="" method="post" enctype="multipart/form-data">
        <label>User Name</label><input type="text" name="username" maxlength="10" size="32"><br>
		<label>User Password</label><input type="password" name="passwrd" maxlength="10" size="32"><br>
		<input type="submit" value="Login" name="sub">
	  </form>';
//Testing the validating values in the Text


class session{
    
   public function __contruct($sid,$timout){
     $sid = $this->sid;
	 $timeout =$this->timeout;
   
   }
   
   static function get(){
     $user = trim($_POST['username']);
	$pass = trim($_POST['passwrd']);
	 if ($user=='kool'){
	 
	 $_SESSION['username']=$user;
	 $_SESSION['password'] =$pass;
	 $redit = "../legacy_mod/user.place.php";
	header("Location: ". $redit );
	 }
	 else{ echo "Erro";}
	 
   }
   public static function set(){
   
   
   }
   
}
if (isset($_POST['sub'])){
  $sess = new session();
  $sess->get();
}
?>
</body>
</html>
