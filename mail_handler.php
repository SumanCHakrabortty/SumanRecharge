<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='sumanrechargeservice@gmail.com';
		$subject='Form Submission Of SumanRechargeService';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Sent Successfully! Thank you - SumanRechargeService</title>
      <link href='https://1.bp.blogspot.com/-cYvNTH5V2Xs/XoIwYsA8eTI/AAAAAAAACvM/Zfy9rlu16nYaYEcbWDuDBl5cVNRuKXyoACPcBGAYYCw/s1600/Suman%2BCHakrabortty.png' rel='apple-touch-icon'/>
<link href='https://1.bp.blogspot.com/-cYvNTH5V2Xs/XoIwYsA8eTI/AAAAAAAACvM/Zfy9rlu16nYaYEcbWDuDBl5cVNRuKXyoACPcBGAYYCw/s1600/Suman%2BCHakrabortty.png' rel='icon' sizes='200x200'/>
<meta content='https://1.bp.blogspot.com/-cYvNTH5V2Xs/XoIwYsA8eTI/AAAAAAAACvM/Zfy9rlu16nYaYEcbWDuDBl5cVNRuKXyoACPcBGAYYCw/s1600/Suman%2BCHakrabortty.png' name='msapplication-square310x310logo'/>
      <meta http-equiv = "refresh" content = "3; url = /" />
   </head>
   <body>
          <h2 style="background-color: #fffffe; font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; text-align: left; white-space: pre;"><span style="font-size: x-large;">Redirecting You</span><span style="font-size: x-large; font-weight: normal;"> to HomePage<span style="color: red;">.</span><span style="color: #fcff01;">.</span><span style="color: #04ff00;">.</span></span></h2></p>
   </body>
</html> 