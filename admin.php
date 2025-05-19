<?php
require("user.php");
class Admin extends User{
    function getEmail(){
        return $this->email."admin.io"
    }
    function login(){}
    function logout(){}
    

}
?>