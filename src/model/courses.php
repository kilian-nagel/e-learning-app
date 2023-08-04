
<?php 
require_once "../lib/dbConnection.php";

function getCoursesByName($name){
    global $dbConnection;
    $statement = $dbConnection->prepare("SELECT *
        FROM courses
        WHERE name LIKE '%:name%'
        ORDER BY date DESC
        LIMIT 50
        "
    );
    $statement->execute([":name"=>$name]);
    $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $courses;
}

function getLastCourses(){
    global $dbConnection;
    $statement = $dbConnection->prepare("SELECT *
        FROM courses
        ORDER BY date DESC
        LIMIT 50
        "
    );
    $statement->execute();
    $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $courses;
}

