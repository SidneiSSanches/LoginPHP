<html>
<body>
<?php

	@$login= $_POST["login"];
	@$password= $_POST["password"];
	@$academico= $_POST["academico"];
	
	$con = mysql_connect("mysql:host=http://sidneisantossanches.hospedagemgratis.net","sidneisa_sidnei","BJ)JglUNYc.Q");
	echo("testes");	
	if (!$con)
  	{
  	    echo("erro");
  	    echo(die("Could not connect: " . mysql_error()));
  		die("Could not connect: " . mysql_error());
  	}
  	echo("teste");
	mysql_select_db("sidneisa_demo", $con);

	$login= stripslashes($login);
	$password= stripslashes($password);
	$login= mysql_real_escape_string($login);
	$password= mysql_real_escape_string($password);
	
	$result = mysql_query("SELECT * FROM banco where usuario = $login and senha = $password");
	$row = mysql_num_rows($result);
	while($row2 = mysql_fetch_assoc($result )){
		$academico = $row2['academico'];
	}
	if ($row == 1)
	{
		session_start();
		$_SESSION["nome"] = $academico;
		echo "<script>location = 'http://www.coala.wc.lt/menu.php';</script>";
		//echo "$academico";
	}
	else 
	{
		echo "<script>alert('Usuario e senha não conferem');</script>";
		echo "<script>location = 'http://www.coala.wc.lt/login.php';</script>";
	}	
	
	mysql_close();	
?>
</body>
</html>