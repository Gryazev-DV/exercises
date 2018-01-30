<?php

class Person
{
    protected $firstName, $lastName, $id;

    public function getPerson()
    {
        echo "Name: " . $this->firstName . ' ' . $this->lastName . "<br />";
        echo "ID: " . $this->id . "<br />";
    }
}

class Student extends Person
{
    protected $testScores;

    public function __construct($firstName, $lastName, $id, $scores)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
        $this->testScores = $scores;
    }

    public function getGrade()
    {
        $grade = array_sum($this->testScores)/count($this->testScores);
        if ($grade < 40) {
            return "T";
        } elseif ($grade < 55) {
            return "D";
        } elseif ($grade < 70) {
            return "P";
        } elseif ($grade < 80) {
            return "A";
        } elseif ($grade < 90) {
            return "E";
        } else {
            return "O";
        }

    }
}

$file = fopen("inheritance.txt", "r");
$person_id = explode(' ', fgets($file));
$firstName = $person_id[0];
$lastName = $person_id[1];
$id = $person_id[2];

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($firstName, $lastName, $id, $scores);

$student->getPerson();
echo $student->getGrade();



