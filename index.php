<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Send Exmaple</title>
</head>
<style>
*{ margin: 0; padding: 0; }
input[type="text"] { height: 22px; padding: 0px 5px; font-size: 16px; }
.form { width:260px; border: 1px solid #cdcdcd; text-align: center; margin: 0 auto; padding:20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; }
input.btn { background: yellow; border: 1px solid #4e4e4e; padding: 5px 20px; font-size: 16px; font-weight: 600; cursor: pointer; }
</style>
<body>
    <body>
        <br>
		<?php
		  $to = "polsingambule435gmail.com";
		  $subject = "Test Mail";
		  $message = "Hello! This Is a Simple Email Messeage.";
		  $from = "pappuambule@gmail.com";
		  
		  mail($to , $subject, $message, $headers);

		  echo "Mail Send";
		 ?>
        <div class="form">
            <h2>Send Mail</h2><br>
            <form action="mailto:polsingambule435@gmail.com" method="post" enctype="text/plain">
                Name:<br>
                <input type="text" name="Name "><br><br>
                E-mail:<br>
                <input type="text" name="Email "><br><br>
                Comment:<br>
                <input type="text" name="Comment " size="25"><br><br><br>
                <input type="submit" value="Send" class="btn"><br><br>
                <input type="reset" value="Reset">
            </form>
        </div>
    </body>
</body>
</html>