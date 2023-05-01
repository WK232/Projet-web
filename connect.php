<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRANews</title>
    <link rel="stylesheet" href="mainstyle.css">
</head>
<body>
<div class="header">
        <a href="mainpage.html"><img src="logo.png" class="logo"></a> 
        <!--<div class="text"-->
            <button style="margin-right:10px"> <a href="signup.html" style="margin-right:20px; color :#87b22d;text-decoration:none;">Sign in</a></button>
        <!--</div>-->
    </div>
<?php 
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$datebirth=$_POST['datebirth'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conn = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
		if (mysqli_connect_error()){
			die('Connection Failed : '.mysqli_connect_error());
		}else{
			$stmt=$conn->prepare('insert into registration (firstname,lastname,gender,email,datebirth,password) 
			values (:firstname,:lastname,:gender,:email,:datebirth,:password)');
			$stmt->execute(array('firstname'=>$firstname,'lastname'=>$lastname,'gender'=>$gender,'email'=>$email,'datebirth'=>$datebirth,
			'password'=>$password));
			echo "registration Successful";
		}
?>
	<hr style="border-color: #87b22d;">
<footer class="footersite">
    <div class="container">
        <div class="row">
            <div class="col1">
                <h3>ACTU</h3>
                <u1>
                    <li>National</li>
                    <li>Regional</li>
                    <li>International</li>
                    <li>Politique</li>
                    <li>Economique</li>
                </u1>
            </div>
            <div class="col1">
                <h3>SPORT</h3>
                <u1>
                    <li>Actu sport</li>
                    <li>Resultats</li>
                    <li>Classement</li>
                    <li>Galerie</li>
                </u1>
            </div>
            <div class="col1">
                <h3>Social media</h3>
                <u1>
                    <li>Instagram news</li>
                    <li>Fb news</li>
                    <li>Twitter</li>
                </u1>
            </div>
           
        </div>
        <div class="row1">
            <div>
            <h3>FOLLOW US</h3>
        </div>
        <div>
            <a href="https://www.instagram.com/lp_lapresse/" target="_blank"><img  style="width:50px;" src="instagram.png"></a>
            <a href="https://www.facebook.com/LaPresseFB/" target="_blank"><img style="width:50px;" src="facebook.png"></a>
            <a href="https://twitter.com/lp_lapresse" target="_blank"><img style="width:50px;" src="twitter.png"></a>
        </div>
        </div>
    </div>
</footer>
	</body>
	</html>