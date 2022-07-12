<?php

use Alura\Pdo\Domain\Model\Student;

require_once "vendor/autoload.php";

$pdo = new PDO("sqlite:banco.sqlite");

$student = new Student(null, "Augusto Quintana", new \DateTimeImmutable("1999-11-12"));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('y-m-d')}');";

var_dump($pdo->exec($sqlInsert));
