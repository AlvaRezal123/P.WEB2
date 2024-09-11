<?php

class Person {
    protected $name; 

public function __construct($name) {
        $this->name = $name;
    }
 public function getName() {
        return $this->name;
    }
}
class Student extends Person {
    private $studentID; 

public function __construct($name, $studentID) {
        parent::__construct($name); 
        $this->studentID = $studentID;
    }
public function getName() {
        return "Student Name: " . parent::getName();
    }
 public function getStudentID() {
        return $this->studentID;
    }
public function setName($name) {
        $this->name = $name;
    }
public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
public function getStudentIDDetails() {
        return $this->studentID;
    }
}
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); 
        $this->teacherID = $teacherID;
    }
public function getName() {
        return "Teacher Name: " . parent::getName();
    }
public function getTeacherID() {
        return $this->teacherID;
    }
}
abstract class Course {
    abstract public function getCourseDetails();
}
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "This is an online course.";
    }
}
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "This is an offline course.";
    }
}
$student = new Student("Alva", "230202039");
$teacher = new Teacher("Dr. Bambang", "T12345");

echo $student->getName() . " with ID: " . $student->getStudentID() . "<br>";
echo $teacher->getName() . " with ID: " . $teacher->getTeacherID() . "<br>";

$student->setName("Rezal");
$student->setStudentID("230202040");

echo $student->getName() . " with new ID: " . $student->getStudentIDDetails() . "<br>";

$onlineCourse = new OnlineCourse();
$offlineCourse = new OfflineCourse();

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails();
?>
