<?php 
	session_start();
?>
<h3>Đăng nhập thành công</h3>
<?php 
	if(isset($_SESSION['user']['username'])){
		echo $_SESSION['user']['username'];
	}else{
		header("Location: ./form.php");
	}
?> <br/>
<a href="logout.php">Logout</a>