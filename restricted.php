<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 500px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
  <?php
	session_start();
	if ($_SESSION['auth'] == true){
		echo 'Welcome, you are an authorized user';
	}
	else
	{ 
		echo  "Упс... Похоже, вы не авторизированы."; 

		echo "<a href='login.php'>Ссылка для авторизации</a>"; 
	}
?>
   </form>
</div>

</body>
</html>
