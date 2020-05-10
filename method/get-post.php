<form action="#" method="Post">
	<input type="text" name="username"><br/>
	<input type="text" name="password"><br/>
	<button type="submit">Submit</button>
</form>

<?php
echo isset($_POST['username']) ? $_POST['username'] : '';
echo isset($_POST['password']) ? $_POST['password'] : '';
?>