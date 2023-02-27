<?
// Require needed classes
require_once('DB.php');

// Create needed objects
$dbh = new DBHandler();

// Check if database connection established successfully
if ($dbh->getInstance() === null) {
    die("No database connection");
}

//$datetime = date("Y-m-d H:i:s");
if(isset($_POST["submit"])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    try {
        $sql = "INSERT INTO users( 
            username, 
            password
        ) 
        VALUES(
            DEFAULT, 
            :username, 
            :password 
        )";
    
        $stmt = $dbh->getInstance()->prepare($sql);
    

        $stmt->bindParam(':username', $user, PDO::PARAM_STR);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);   
    
        $stmt->execute();
        echo "Success";
    } 
    catch(PDOException $e) {
        echo $e;
    }
    
}

?>


<form action="POST">
<input name="Username" type="text" required>  </input>
<input name="Password" type="password" required>  </input>
<input name="submit" type="submit">  </input>
</form>