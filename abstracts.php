<?php

abstract class Student
{
    public $firstname;
    public $lastname;

    abstract public function displayDetails();

}

class Classrep extends Student
{

    public $age;

    public function displayAge($age)
    {
        $this->Age = $age;
        return $this;
    }

    public function displayDetails()
    {
        $this->firstname = "Stephanie";
        $this->lastname = "Githinji";
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
        return $this;
    }

    public function displayDetails()
    {
        $this->firstname = "Kiera";
        $this->lastname = "Shay";
    }
}

$student = new ClassRep();
$student->displayAge("18 years old");
$student->displayDetails();
$department = new Departmentrep();
$department->displayCourse("Computer Science");
$department->displayDetails();
?>

