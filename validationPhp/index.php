<?php
if(!isset($username)){
    $username="";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Form VAlidation </h2>

    <form action="result.php" method="POST">

Name:<input type="text" name="name" value="<?php echo htmlspecialchars($username)?>"><br>

<p><?php  if(isset($username)){?>
    <?php echo $user_error ?>
    <?php } ?></p>

<br>



Password:<input type="password" name="password" value="<?php echo htmlspecialchars($username)?>"><br><br>



<input type="submit" name="submit" value="Registration">
</form>


    
</body>
</html>