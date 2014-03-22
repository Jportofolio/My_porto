<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="d_image/log.png" />
<script type="text/javascript" src="js/jquery-1.5.2.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	   			   
 //facebook--
 $('.faceb').click(function(){
		window.open("http://www.facebook.com/pages/Mountain-Sinai-Ministries/292716997495489");			
							
		});
 //Twitter for the
  $('.twitt').click(function(){
		window.open("https://twitter.com/MountainSinai");			
							
		});
   //Youtube for Account
   $('.ytub').click(function(){
		window.open("http://www.youtube.com/channel/UCgtm9haAxoP2QFiZwpcbPrQ");
							  });
});
</script>
<title>Mountain Sinai CAPE TOWN</title>
<style type="text/css">
<!--
#slideshow{ width:900px; height:auto;
           overflow:hidden; padding-top:10px;}

table#cor{ border-collapse:collapse;}
body{ padding:0; margin:0; background-color:#333;}
.menu {
	margin: 0px; width:906px
	padding: 0px;
}
.menu ul{
	margin: 0px; 
	padding: 0px;
}
.menu ul li{list-style:none;}
.menu ul li a{background-image:url(d_image/Black%20button.png); 
		 background-repeat:no-repeat;
		 font-family: Arial;
		 float:left; 
		 font-size:11px; 
		 text-align:center;
		 width:150px; 
		 position:relative;
		 text-decoration:none;
		 color:#DDD; line-height:35px;
		 }
.menu ul li a:hover{ background-image:url(d_image/orange%20button.png);
                     color: #000;}
-->
<!--submenu style-->
#submenu{ padding:0; margin:0; clear:both;}
#submenu ul{ padding:0; margin-left:150px; margin-top:0;
             margin-right:150px; margin-bottom:0;}
#submenu ul li{list-style:none;}

#submenu ul li a{ float:left;
                  font-size:11px; 
				  font-family: Arial;;
				  text-decoration:none;
				  text-align:center;
				  color:#DDD;
				  line-height:35px;
				  width:150px;
				  background-image:url(d_image/Black%20button.png); 
		          background-repeat:no-repeat;
				  }
#submenu ul li a:hover{ background-image:url(d_image/orange%20button.png);
                     color: #000;}
.intro{margin-top:40px; 
       width:900px; padding-top:9px;
	   color:#DDD;}

p.text {
	font-family:Arial;
}
<!--DIV MEDIA-->

#media{margin-top:10px; padding:1px; }
#media img{margin-top:9px; cursor:pointer;}
.cop{ float:right; color:#FFC; color: #DDD; font-family: Arial; font-size:10px;}
.foot{ text-align:center; margin-top:1px; height:15px;}
.foot i{color: #999; font-family:Arial; font-size:12px;}
#slideshow .fill{ width:450px; padding-top:5px; 
                    vertical-align:top;
                 display: table-cell;
				 }
#slideshow .fill form{ color:#DDD;}
#slideshow .fill img{ margin-left:54px;}
#slideshow .details{ width:450px; vertical-align:top; color:#FFF;
                    display: table-cell;
					 }
#slideshow .details img{padding-left:63px; }
#slideshow .details ul{padding:0; padding-left:63px;}
#slideshow .details ul li { list-style:none; font-family:Arial; font-size:12px; color:#CCC;}
#slideshow form#form1 table tr td{font-family: Arial; font-size:11px;}
#slideshow .details p{font-family: Arial ; font-size:12px; padding-left:63px;}
#slideshow .details H4{ font-family:Arial; padding-left:63px; 
                        font-size:12px; 
						font-weight:100;
						color:#CCC;}
.details{ background-image:url(d_image/ndako.png); background-attachment:scroll; 
             background-position:right; background-repeat:no-repeat;  
			 }
/*THIS IS FOR TEXT EREA*/
#slideshow form#form1 input[type="text"]{ 
               background-color: #999; 
			   border-style:none;
			   color: #FFF;}
#slideshow form#form1 textarea{background-color: #999; resize:none; border-style:none; color: #FFF;}
i.email{ font-family:Arial; font-size:12px; font-style:normal; color:#CCC; padding-left:63px;}
.details .bar{ width:7px; height:247px; 
               float:left; position:fixed;
			   background: url(d_image/libaya.png); background-repeat:repeat-y;
			   }
.intro .barbottom{width:900px; height:7px; 
               float:left; padding:0;
			   background: url(d_image/libaya2.png); background-repeat:repeat-x; 
			   }
</style>
</head>

<body>
<table id="cor" width="900" border="0" align="center">
  <tr>
    <td>
    
    <div class="titre">
    <img src="d_image/FINAL-SOLUTION.jpg" width="900" height="200" border="0" usemap="#Map" />
    </div>
    <div class="menu">
     <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="Programs.html">Programs</a></li>
        <li><a href="testimony.html">Testimonies</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
     </ul>
    </div>
    </td>
  </tr>
  <tr>
   <td>
      <div id="slideshow">
        <div class="fill">
        <img src="d_image/Emailus.png" width="144" height="72" />
         <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <table width="426" border="0">
               <tr>
                 <td width="91"> Name</td>
                 <td width="325"><input type="text" name="name" id="name" /></td>
               </tr>
               <tr>
                 <td>Email</td>
                 <td><input type="text" name="email" id="email" /></td>
               </tr>
               <tr>
                 <td>Subject</td>
                 <td><input type="text" name="subject" id="subject" /></td>
               </tr>
               <tr>
                 <td>Message</td>
                 <td><textarea name="mess" id="mess" cols="45" rows="5"></textarea></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td><input type="submit" name="send" id="send" value="Send Message &gt;&gt;" />
                 <input type="reset" name="clear" id="clear" value="Clear Content" /></td>
               </tr>
             </table>
           </form>
        </div>
        <div class="details">
        <div class="bar">
        
        </div>
            <p>Call Us</p>
           <img src="d_image/old-telephone.jpg" height="72" width="144" />
           <h4>Prayer and Counseling</h4>
           <ul>
             <li>(+27) 021 761 3889</li>
             <li>(+27) 073 217 9641</li>
           </ul>
           <h4>General Inquiry</h4>
           <i class="email">
             E-mail:info@mountainsinaiministries.co.za
           </i></br>
           <i class="email">
             Physical Address : 207, Main Road, Wynberg Cape Town 7800
           </i>
        </div>
      </div>
    <div class="intro">
    <!--<p class="text">
 
    </p>-->
    <div class="barbottom"></div>
    </div>
    <div id="media">
    <i class="cop">Mountain Sinai &copy; All right Reserved.</i>
        <img src="d_image/face.png" class="faceb" width="44" height="37" />
      <img src="d_image/twitt.png" class="twitt" width="44" height="37" />
      <img src="d_image/you_tub.png" class="ytub" width="44" height="37" /> 
     </div>
     <div class="foot">
     <i>Home Design Contact: (+27) 83 966 31 55</i>
     </div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="56,54,203,184" href="index.html" />
</map>
<?php
 if (isset($_POST['send']))
	{
	          $n=$_POST['name'];
	          $cour=$_POST['email'];
	          $mes=$_POST['mess'];
			  $subject=$_POST['subject'];
	            if (empty($n) && empty($cour) && empty($mes))
		              {
		                echo '<script type="text/javascript">
						     alert("Please fill the form to send");
							 document.getElementByIName("name").Focus;
						</script>';
						die();
		              }
				 if (!preg_match("/^([a-zA-Z0-9])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/", $cour))
		                        {
		                           echo '<script type="text/javascript">
						   
						              alert("Please type your Email correctly.. Thank you !");
						  
						               </script>';
								  die();
		                         }
				          //introducin the SMTP
		                   $headers="From:".$cour;
		                   $to="info@mountainsinaiministries.co.za";
		                   $sub="Message from"."_".$n."[".$subject."]";
		                   //defining the SMTP
		                   ini_set("SMTP","smtp.mountainsinaiministries.co.za");
		                   //sending the Mail
		                   $snd=mail($to,$sub,$mes,$headers);
				  if ($snd==true)
		                 {
                           echo '<script type="text/javascript">
						     
						 alert("Your Message has been succesfully sent !");
						      </script>';
		                 }
			              else { 
						  
						  echo "Message Failed "; 
						  
						}
	}
 ?>
</body>
</html>
