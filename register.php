<?php
if(isset($_POST['loginButton'])) {
//echo "login Button Pressed";

}
if(isset($_POST['registerButton'])) {
 echo "Register Button Pressed";
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
    <h1>Login your Account</h1>
    <p>
    <label for="loginUsername">Username</label>
    <input id="loginUsername" name="loginUsername" type="text" placeholder="name" required>
   </p>
    <p>
    <label for="loginPassword">Password</label>
    <input id="loginPassword" name="loginPassword" type="password" placeholder="password" required>
    </p>
    <button type="submit" name="loginButton">LOG IN</button>
    </form>

<form id="registerForm" action="register.php" method="POST">
    <h1>Create your free Account</h1>
    <p>
    <label for="username">Username</label>
    <input id="username" name="username" type="text" placeholder="username" required>
   </p>
   <p>
    <label for="firstName">First Name</label>
    <input id="firstName" name="firstName" type="text" placeholder="first Name" required>
   </p>
   <p>
    <label for="lastName">Last Name</label>
    <input id="lastName" name="lastName" type="text" placeholder="last Name" required>
   </p>
   <p>
    <label for="username">Username</label>
    <input id="username" name="username" type="text" placeholder="email" required>
   </p>
   <p>
    <label for="email">Email</label>
    <input id="email" name="email" type="email" placeholder="email" required>
    </p>
    <p>
    <label for="email2">Confirm Email</label>
    <input id="email2" name="email" type="email" placeholder="email" required>
    </p>

    <p>
    <label for="password">Password</label>
    <input id="password" name="password" type="password" placeholder="Your password" required>
    </p>
    <p>
    <label for="password2">Confirm Password</label>
    <input id="password2" name="password2" type="password" placeholder="Your password" required>
    </p>
    <button type="submit" name="registerButton">SIGN UP</button>
    </form>

    </div>
</body>
</html>