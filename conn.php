<?php 
	$conexao=mysql_connect("localhost","root","")or die(mysql_error());
	$res=mysql_select_db("mario",$conexao)or die(mysql_error());

?>