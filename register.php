<?php
include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registration Successful!";
    }else{
        echo "Error!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required><br><br>

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<button name="register">Register</button>

</form>

<a href="login.php">Login Here</a>

</body>
</html>