<?php 
	session_start();
?>
<form action="#" method="Post">
	<input type="text" name="username"><br/>
	<input type="text" name="password"><br/>
	<button type="submit">Submit</button>
</form>

<?php
	$username =  isset($_POST['username']) ? $_POST['username'] : '';
	$password =  isset($_POST['password']) ? $_POST['password'] : '';
	if($username == "admin" && $password == "123"){
		$user = [
			"username" => $username,
			"password" => $password,
		];
		$_SESSION['user'] = $user;
		// $_SESSION['user']  = [
		// 	"username" => $username,
		// 	"password" => $password,
		// ] = 
		header("Location: ./home.php");
	}else{
		echo "Đăng nhập thất bại";
	}
?>