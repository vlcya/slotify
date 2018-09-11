<?php

class Account
{
    private $errorArray;
    public function __construct()
    {
        $this -> errorArray = array();
    }

    public function register($un,$fn, $ln, $em, $em2, $pw, $pw2) {
        $this -> validateUsername($un);
        exit('muie');
        $this -> validateFirstName($fn);
        $this -> validateLastName($ln);
        $this -> validateEmails($em, $em2);
        $this -> validatePasswords($pw, $pw2);

        if (empty($this -> errorArray)) {
            return true;
        } else {
            return false;
        }
    }

    public function getError($error) {
        if (!in_array($error, $this -> errorArray)) {
            $error = "";
        }
        return "<span class='errorMessage'>" . $error . "</span>";
    }

    public function validateUsername($un)
    {
     if (strlen($un) < 25 ){
            array_push($this -> errorArray, "Your username must be betweeb 5 and 25 characters!");
            return;
     }

        //todo check if username exists
    }

    private function validateFirstName($fn)
    {
        if (strlen($fn) > 25 || strlen($fn < 4)){
            array_push($this -> errorArray, "Your first name must be betweeb 5 and 25 characters!");
            return;
        }
    }

    private function validateLastName($ln)
    {
        if (strlen($ln) > 25 || strlen($ln < 4)){
            array_push($this -> errorArray, "Your last name must be betweeb 5 and 25 characters!");
            return;
        }
    }
    private function validateEmails($em, $em2)
    {
        if ($em != $em2) {
            array_push($this -> errorArray, "Your emails do not match!");
            return;
        }

        if (!filter_var($em,FILTER_VALIDATE_EMAIL)){
            array_push($this -> errorArray, "Your emails IS NOT VALID!");
            return;
        }

        //todo chech email if unique
    }

    private function validatePasswords($pw, $pw2)
    {
        if ($pw != $pw2) {
            array_push($this -> errorArray, "Your passwords do not match!");
            return;
        }

        if (strlen($pw) > 25 || strlen($pw < 4)){
            array_push($this -> errorArray, "Your password must be betweeb 5 and 25 characters!");
        }
    }
}

?>