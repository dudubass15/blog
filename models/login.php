<?php
require '../conexaoBD/banco.php';

if (isset($_POST['email']) && isset($_POST['senha']) != 0) {

	echo "Existe POST em ambos"; die;

} else{
	echo "Não existe POST em nenhum dos dois"; die;
}

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$row = $qry->fetch();
		$_SESSION['id'] = $row['id'];

		return true;
	}

	header('Location: ../login.php');

?>