<?php
$connect =mysqli_connect("localhost", "root", "", "pondok_it");
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
	$sql = mysqli_query($connect,"SELECT * FROM user WHERE email = '$email', password = '$password'");
	$result=mysqli_num_rows($sql);
	if ($result) {
		$row = mysql_fetch_array($result);
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $row['nama'];
		echo "login";
		// header("Location:home.php");
	} else {
		echo "email dan password salah";
	}
} else {
	echo "email dan password anda kosong, silahkan masukan.";
}
?>