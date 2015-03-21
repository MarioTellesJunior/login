<?php
session_cache_limiter();
session_cache_expire(1);
session_start();  
include "verifica.php";
?> 

<html>
<head>
	<title></title>
</head>
<body>
<h1>Seja bem vindo!!!<?php echo $_SESSION["LOGIN_USUARIO"]; ?></h1>
<a href="logoff.php">SAIR</a>
</body>
</html>