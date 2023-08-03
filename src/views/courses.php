

<?php

require_once "./src/data/course.php";

function getIndex(){
    global $courses;
    $coursesHtml = "
    <h1 class='p-3 pt-4'>Courses</h1>
    <div class='p-3 pt-0 overflow-scroll d-sm-flex gap-sm-3 justify-content-start' id='courses'>
    ";
    foreach ($courses as $id => $course){
        $title = $course["title"];
        $desc = $course["description"];
        $author = $course["author"];
        $image = $course["image"];
        $tags = $course["tags"];
        $coursesHtml .= createCourseHtml($title,$desc,$author,$image,$tags);
    }
    $coursesHtml .= "</div>";
    return $coursesHtml;
}

function createCourseHtml($title,$desc,$author,$image,$tags){
    $authorName = $author["username"];
    $authorPicture = $author["picture"];

    $badgesHtml = createBadgesHtml($tags);
    
    $templateHtml = "
        <div class='course w-100 w-md-400'>
            <div class='bg-secondary' style='height:200px' alt=''></div>
            <div class='content'>
                <h2 class='title pt-2'>$title</h2>
                <div class='d-flex'>
                    <div id='author' class='text-secondary d-flex'>
                        <img src='$authorPicture' alt=''>
                        <p class='username mb-0'>by $authorName</p>
                    </div>
                </div>
                <p class='desc'>$desc</p>
                $badgesHtml
            </div>
        </div>
    ";
    return $templateHtml;
}

function createBadgesHtml($tags){
    $tagsHtml = '<div class="tags d-flex gap-1">';
    foreach($tags as $tag){
        $tagsHtml .= "<p class='badge bg-primary rounded-pills'>$tag</p>";
    }
    $tagsHtml .= "</div>";
    return $tagsHtml;
}