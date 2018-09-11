<?php
include('includes/classes/Account.php');
$account = new Account();

include('includes/handlers/register-handler.php');
include('includes/handlers/login-handler.php');

?>
<html>
<head>
    <title>
        Welcome to Slotify!
    </title>
</head>
<body>

<div>
    <!--//login form    -->

    <form action="register.php" id="loginForm" method="post">
        <h2>Log in to your acount</h2>
        <p>
            <label for="loginUsername">Username</label>
            <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" required>
        </p>

        <p>
            <label for="logInPassword">Password</label>
            <input id="logInPassword" name="logInPassword" type="password" placeholder="pasword" required>
        </p>

        <button name="loginButton" type="submit">Log In</button>
    </form>

    <!--sing up form-->
    <form action="register.php" id="registerForm" method="post">
        <h2>Registeer a new acount</h2>
        <p>
            <?php echo $account -> getError('Your username must be betweeb 5 and 25 characters!');?>
            <label for="registerUsername">Username</label>
            <input id="registerUsername" name="registerUsername" type="text" placeholder="Username" required>
        </p>

        <p>
            <label for="registerFirstName">First Name</label>
            <input id="registerFirstName" name="registerFirstName" type="text" placeholder="First Name" required>
        </p>

        <p>
            <label for="registerLastName">Last Name</label>
            <input id="registerLastName" name="registerLastName" type="text" placeholder="Last Name" required>
        </p>

        <p>
            <label for="registerEmail1">E-mail</label>
            <input id="registerEmail1" name="registerEmail1" type="email" placeholder="E-mail@email.com" required>
        </p>

        <p>
            <label for="registerEmail2">Confirm E-mail</label>
            <input id="registerEmail2" name="registerEmail2" type="email" placeholder="E-mail@email.com" required>
        </p>

        <p>
            <label for="registerPassword1">Password</label>
            <input id="registerPassword1" name="registerPassword1" type="password" placeholder="pasword" required>
        </p>

        <p>
            <label for="registerPassword2">Password</label>
            <input id="registerPassword2" name="registerPassword2" type="password" placeholder="pasword" required>
        </p>

        <button name="registerButton" type="submit">Register</button>


    </form>
</div>
</body>
</html>