<section class="agile-contact" id="contact">
	<h4 class="header">Регистрация</h4>
	<div class="line"></div>
<div class="agile-contactus">
<div class="container">
		<div class="col-md-6 agile-contact1">
					<h5></h5>
					<p></p>
					<?php 
if (isset($_POST["status"]) &&  $_POST["status"] =='success') {
    ?>
    <script>
        alert ('Inserted');
    </script>
    <?php
}
?>
<!--header( "Location:index.php?status=success");  insert ba navised-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/css">
</head>
<body>
    <form action="login.php" method="post">
        <label for="" class="bg-success">username:</label> <br>
        <input type="text" name='username'><br>
        <label for=""  class="bg-success">email:</label><br>
        <input type="text" name='email'><br>
        <label for=""  class="bg-success">login:</label><br>
        <input type="text" name='login'><br>    
        <label for=""  class="bg-success">password:</label><br>
        <input type="text" name='password'><br>
        <input type="submit" value="Отправить" name="add">
    </form>
</div>
</body>
</html>
                    
                    
                    
                    
                    
                    <!--<div class="contact-form">
					<form action="#" method="get">
						<input type="text" name="username" placeholder="Имя" required="">
						<input type="email" name="email address" placeholder="email" required="">
						<textarea placeholder="Оставьте коментарий"></textarea>
						<input type="Submit" value="submit">
					</form>
					</div>-->
					
		