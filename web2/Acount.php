<?php
class Acount
{
    public $idAccount;
    public $name;
	public $email;
	public $password;
	public $flag;

    function registrationForm()
    {
        $this->name = trim($_POST['name']);
	    $this->email = trim($_POST['email']);
	    $this->password = trim($_POST['password']);
        $this->flag = trim($_POST['checkbox']);
	}
}
?>