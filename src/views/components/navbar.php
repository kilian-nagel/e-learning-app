

<?php 

require_once "./src/data/user.php";

function getAuthButtons(){
    return 
    '<div class="btn-container">
        <button class="btn-signup">signup</button>
        <button class="btn-login">login</button>
    </div>';
}   

function getUserProfile($user){
    $username = $user["username"];
    $pictureUrl = $user["pictureUrl"];
    
    return "       
        <div id='userProfile' class='d-flex'>
            <img src='{$pictureUrl}' alt=''>
            <p class='username'>{$username}</p>
        </div>
    ";
}

function getNavbar($user){
    $authButtons = getAuthButtons();
    $userProfile = $user !== "" ? getUserProfile($user) : "";
    $navbarElement = $user !== "" ? $userProfile : $authButtons; 
    global $relativeUrl;

    echo '
    <nav id="=navbar navbar-expand-lg" class="border-bottom border-primary-subtle">
        <div class="upper d-flex p-3 pb-0 justify-content-between items-centers">
            <span class="navbar-brand fs-4 fw-bold logo">e-learning</span>
            <div class="d-flex gap-3">
                <div class="search-bar d-none d-md-block">
                    <input type="text">
                </div>
                '.$navbarElement.'
            </div>
        </div>
        <nav class="lower px-3 pb-3">
            <ul class="nav d-flex">
                <li class="nav-item"><a href="'.$relativeUrl.'" class="nav-link p-0 pe-3 text-secondary">home</a></li>
                <li class="nav-item"><a href="'.$relativeUrl.'/courses" class="nav-link p-0 pe-3 text-secondary">courses</a></li>
                <li class="nav-item"><a href="'.$relativeUrl.'/create" class="nav-link p-0 pe-3 text-secondary">create</a></li>
                <li class="nav-item"><a href="" class="nav-link p-0 pe-3 text-secondary">settings</a></li>
                <li class="nav-item"><a href="" class="nav-link p-0 pe-3 text-secondary">about</a></li>
            </ul>
        </nav>   
    </nav>
    ';   
}