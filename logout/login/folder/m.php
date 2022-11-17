query("SELECT *from users WHERE id='" . $_SESSION["userId"] . "'");
	$row=mysqli_fetch_array($result);
	 $pass_encrypt=md5(mysqli_real_escape_string($db,$_POST['defaultcurrentPass']));
	if($pass_encrypt == $row["password"]) {
		$passnew_encrypt=md5(mysqli_real_escape_string($db,$_POST['changenewPass']));
	$str=$db->query("UPDATE users set password='" . $passnew_encrypt . "' WHERE id='" . $_SESSION["userId"] . "'");
	$message = "You have successfully changed your password.";
	} else $message = "Current Password is not correct";
}

?>