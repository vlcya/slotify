<?php
function sanitizePassword($str)
{
    $str = strip_tags($str);
    return $str;
}

function sanitizeFormUsername($str)
{
    $str = strip_tags($str);
    $str = str_replace(" ", "", $str);
    return $str;
}

function sanitizeFormNames($str)
{
    $str = strip_tags($str);
    $str = ucfirst(strtolower($str));
    return $str;
}

if (isset($_POST['registerButton'])) {
    //register button was presseed!
    $username = sanitizeFormInput($_POST['registerUsername']);
    $firstName = sanitizeFormNames($_POST['registerFirstName']);
    $lastName = sanitizeFormNames($_POST['registerLastName']);
    $email1 = sanitizeFormUsername($_POST['registerEmail1']);
    $email2 = sanitizeFormUsername($_POST['registerEmail2']);
    $password1 = sanitizePassword($_POST['registerPassword1']);
    $password2 = sanitizePassword($_POST['registerPassword2']);

    $wssSuccessful = $account->register($username, $firstName, $lastName, $email1, $email2, $password1, $password2);

    if ($wssSuccessful == true) {
        header("Location: index.php");
    }
}

?>