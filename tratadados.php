<?php
	require_once("conn.php");

	$nome=trim(htmlspecialchars($_POST['nome']));
	$email=trim(htmlspecialchars($_POST['email']));
	$usuario=trim(htmlspecialchars($_POST['usuario']));
	$senha=trim(htmlspecialchars(md5($_POST['senha'])));

	$query = mysql_query("INSERT INTO usuarios(nome,email,usuario,senha) VALUES('$nome','$email','$usuario','$senha')")or die(mysql_error());

	if($query){
	header("Location:login.php?erro=0");
	} 
	else{
	header("Location:cadastro.php?erro=1");	
	} 
	

?>