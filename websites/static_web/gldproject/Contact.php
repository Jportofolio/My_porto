<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gld_Projects &gt;&gt;</title>
<link href="gld_css/Style-2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js_file/jquery-1.5.2.js"></script>
<script type="text/javascript" src="js_file/jquery.cycle.all.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$('#slides').cycle({
	fx: 'fade',
	speed: 3500
	});

$('.faceb').click(function(){
window.open("https://www.facebook.com/pages/Gld-Projects/323970001031682");
  });
$('.twitt').click(function(){
window.open("https://twitter.com/GldProjects");
  });
 });
</script>
</head>

<body>
<!--this is the header--->
<div id="header">
  <table width="860" height="109" border="0" align="center" id="tit">
  <tr>
    <td align="left" valign="top">
      <div id="menutop">
        <ul>
          <li><a href="#">Contacts</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Directors</a></li>
        </ul>   
       </div> 
       <img src="img_gld/title.png" border="0" usemap="#Map2"/><span>____</span>
           <img class="faceb" src="img_gld/face.png" width="39" height="39" />
           <img class="twitt" src="img_gld/twitter.png" width="39" height="39" /></td>
  </tr>
</table>
</div>
<!--This is the Wrapper-->
<div id="corp">
<table id="tab2" width="860" height="159" border="0" align="center">
  <tr class="menurow">
    <td align="left" valign="top">
      <div id="menu"> 
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="service.html">Services</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="values.html">Gld Values</a></li>
          <li><a href="directors.html">Directors</a></li>
          <li><a href="contact.php">Contacts</a></li>
       </ul>
     </div>
     <div id="ab-content">
       <div id="abt-tit">
         <img src="img_gld/Untitled-1.jpg" />
       </div>
       <div class="ab-text">
         <p class="who-tit3">GLD CONTACTS DETAILS...</p> 
         </p>
        <table width="851" height="29" border="0" id="who-text">
         <tr>
           <td width="322" class="part-left">
               <h3>COMPLIMENTS OR COMPLAINTS ...</h3>        
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post" id="cont">
           
             <table width="375" height="183" border="0" id="contable">
                  <tr>
                      <td width="52"><label>Names </label></td>
                      <td width="313"><input type="text" name="name" id="name" /></td>
                  </tr>
                  <tr>
                      <td><label>Email </label></td>
                      <td><input type="text" name="email" id="email" /></td>
                  </tr>
                  <tr>
                      <td><label></label></td>
                      <td><textarea name="textarea" id="zonemess" cols="45" rows="5"></textarea></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td class="result"><input type="Submit" name="send" value="Click to Send" /><br />
                       <?php
					    
	                      if (isset($_POST['envoi'])){
	                      $n=$_POST['nam'];
	                      $cour=$_POST['cour'];
	                      $mes=$_POST['mes'];
	                      if (empty($n) && empty($cour) && empty($mes))
		                  {
		                    echo "<big>Fill out The Form Please....</big>";
		                  }
		                      if (!preg_match("/^([a-zA-Z0-9])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/", $cour))
		                        {
		                           echo "Type your E_mail Correctly ! Thank you ! ";
		                         }
		                   //introducin the SMTP
		                   $headers="From:".$cour."<BR/>"."================================";
		                   $to="kx.joshua@yahoo.fr";
		                   $sub="Contact from"."_".$n;
		                   //defining the SMTP
		                   ini_set("SMTP","quorra.aserv.co.za");
		                   //sending the Mail
		                   $snd=mail($to,$sub,$mes,$headers);
		                   if ($snd==true)
		                 {
                           echo "Thank you"." ".$n." "."Your Message has been succesfully sent !";
		                 }
			             else { echo "Message Failed "; }
	                   }
                       ?>
					  
                      </td>
                  </tr>
              </table>
           </form>

           </td>
            <td width="310" class="part-right">
              
              <h3>ADDRESS DETAILS ....</h3>   
              <p>
                <ul class="liste">
                  <li>3 Mepple close Sonkring Brackenfell</li>
                  <li>TEL: 834541956/0794882752</li>
                  <li>CAPE TOWN</li>
                  <li>____________________________</li>
                </ul>
              </p>        
            </td>
         </tr>
         </table>
          </p>
       </div>
     </div>
    
    </td>
  </tr>
</table>


</div>
<!--This is the Footer-->
<div id="footer">
<ul>
  <li>GLD Projects | 3 Mepple Close, Sonkring, Brackenfell, Cape Town 7560</li>
  <li>Tel: 0834541956/0794882752 Fax: 0000000000</li>
  <li>&copy; GLD Projects 2012</li>
</ul>
</div>
<map name="Map" id="Map"><area shape="rect" coords="10,9,107,102" href="index.html" />
</map>
<div id="feedb">
  <a href="#">FEED BACK HERE .</a>
</div>
<div id="feedtext">
 
</div>

<map name="Map2" id="Map2">
<area shape="rect" coords="3,3,132,104" href="index.html" />
</map></body>
</html>
