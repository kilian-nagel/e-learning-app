
<?php 

/*

1. Get the user if he exists in the cache
2. If cache miss then query db
*/

$user = ["username"=>"goat","pictureUrl"=>"hi.jpg"];
if(isset($_COOKIE["user"])){
    echo "cookie set";
    $user = $_COOKIE["user"];
}

function getUser($username){
    global $user;
    // parse input
    if($username!==""){
        //$user = queryDb();
        return $user;
    }
    return $user;
}