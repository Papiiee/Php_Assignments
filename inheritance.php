<?php
//parent class
class Student
{
   public $firstname='Tatynna';
   public $lastname='Lawrence';
   public $age='18';
   public $role;

   public function setFirstname($firstname)
   {
   $this->firstname=$firstname;
   return $this;
   }
    public function setLastname($lastname)
    {
        $this->lastname=$lastname;
        return $this;
    }

    public function setAge($age)
    {
        $this->age=$age;
        return $this;
    }
    public function role()
    {
        echo "<br><br><br>Hey! I am a student in Makini School";
    }
}
//child class
class ClassRep extends Student
{
    public function role()
    {
        echo "<br><br><br>I am a class Representative!";
    }
    //inherited properties
    public function getDetails()
    {
        echo "<br><br><br>FirstName:$this->firstname <br><br><br>LastName:$this->lastname <br><br><br>Age:$this->age";
    }
}

$student=new ClassRep();
$student->getDetails();
?>
