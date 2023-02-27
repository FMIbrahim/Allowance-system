<?php
define('BASEPATH', true); //access connection script if you omit this line file will be blank

require "DB.php";

if(isset($_POST['submit'])){
    $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //ensure fields are not empty
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    echo '<script>alert("Reset Password Link Sent")</script>';

}



?>

<form action="" method="post">                          
    <select id="accttype" name="accttype">

    </select><br>  
    <button name="submit" type="submit">Forgot Password</button>
 </form>
