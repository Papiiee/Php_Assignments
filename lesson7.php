<?php

class Member
{

    public $username=" ";

    private $loggedIn = false;

    public function login()
    {

        $this->loggedIn = true;

    }

    public function logout()
    {

        $this->loggedIn = false;

    }

    public function isLoggedIn()
    {

        return $this->loggedIn;

    }

//    public function setUsername()
//    {
//        $this->username='Githinji';
//    }
//
//    public function getUsername()
//    {
//     echo "The username is: $this->username";
//    }

}


class Administrator extends Member
{

    public function createForum($forumName)
    {

        echo "$this->username created a new forum: $forumName<br>";

    }

    public function banMember($member)
    {

        echo "$this->username banned the member: $member->username<br>";

    }

}

 //Create a new member and log them in

$member = new Member();
$member->username = "Stephanie";

$member->login();

echo $member->username . " is " . ($member->isLoggedIn() ? "logged in" : "logged out") . "<br>";
//Create a new administrator and log them in

$admin = new Administrator();
$admin->username = "Jomjom";

$admin->login();

	echo $admin->username . " is " . ($member->isLoggedIn() ? "logged in" : "logged out") . "<br>";

 //Displays "Jomjom created a new forum: A3squad!";

	$admin->createForum("A3squad!");

 //Displays:"Jomjom banned the member: Stephanie";

	$admin->banMember($member);


//$admin->setUsername();
//$admin->getUsername();
?>

<?php
// Method Overiding
class Car
{
    public function hello()
    {
        echo '<br><br><br>beep!Open the gate';
    }
}
class Sportscar extends Car
{
    public function hello()
    {
        echo '<br><br><br>beep! I am a derived class';
    }
}
$car=new Car();
$car->hello();
$sportscar=new Sportscar();
$sportscar->hello();

?>