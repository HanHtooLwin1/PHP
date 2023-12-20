<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
    require_once "Parent.php";

    class Student {
        public $id;
        public $name;
        public $grade;
        public $parent;
    }

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Mg Mg";
    $student1->grade = "1";
    $student1->parent = $parent1;

    $student2 = new Student();
    $student2->id = "2";
    $student2->name = "Ko Ko";
    $student2->grade = "3";
    $student2->parent = $parent1;

    $student3 = new Student();
    $student3->id = "3";
    $student3->name = "Ma Ma";
    $student3->grade = "2";
    $student3->parent = $parent2;

    $studentList = array();

    array_push($studentList, $student1, $student2, $student3);
    
    foreach($studentList as $student) {
        echo (
            "<ul class=\"list-group\"><li class=\"list-group-item active\">Student id: " . $student->id . "</li>" .
            "<li class=\"list-group-item\">Student name: " . $student->name . "</li>" .
            "<li class=\"list-group-item\">Grade: " . $student->grade . "</li>" .
            "<li class=\"list-group-item\">Parent name: " . $student->parent->getName() . "</li>" .
            "<li class=\"list-group-item\">Parent occupation: " . $student->parent->occupation . "</li></ul>");
    }
?>

</body>
</html>