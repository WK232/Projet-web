<?php 
        $comment=$_POST['comment'];
        $conn = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
		if (mysqli_connect_error()){
			die('Connection Failed : '.mysqli_connect_error());
		}else{
			$stmt=$conn->prepare('insert into comments (nb_news,comment) 
			values (3,:comment)');
			$stmt->execute(array('comment'=>$comment));
			echo "thank you for your comment";
		}
?>