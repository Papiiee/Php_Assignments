<?php

abstract class Student
{

    abstract public function displayDetails($firstname,$lastname);

}

class Classrep extends Student
{
    public $firstname;
    public $lastname;
    public $age;

    public function displayAge($age)
    {
        $this->Age = $age;
        echo "<br><br>My age is:$age<br><br>";
    }

    public function displayDetails($firstname,$lastname)
    {
        echo "My name is:$firstname $lastname!";
    }
}

class Departmentrep extends Student
{
    public $course;

    public function department()
    {
        echo "<br><br>I am in the Computer Science Department<br><br>";
    }

    public function displayCourse($course)
    {
        $this->course = $course;
        echo "<br><br>The Course I take is: $course<br><br>";
    }

    public function displayDetails($firstname,$lastname)
    {
        echo " My name is:$firstname $lastname!";
    }
}

$student = new ClassRep();
$student->displayAge("18 years old");
$student->displayDetails("Stephanie","Githinji");
$department = new Departmentrep();
$department->displayCourse("Computer Science");
$department->displayDetails("Kiera","Shay");
?>

