
<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<!--if (isset($_SESSION['username']) OR isset($_SESSION['admin-session']) ) {
//then we are checking the activity sesssion $_SESSION['']
if (isset($_SESSION['last_active'])) {

    //if the time is set then we check the difference
    $max_time=5*60; #number of seconds
    $now=microtime(date("H:i:s"));
    //Checking the last active  and now difference in seconds
    $diff=round(microtime(date("H:i:s"))- $_SESSION['last_active']); #the difference of time
    if ($diff>=$max_time) { #if the difference is greater than the allowed time!
        //echo "logging out couse the time is".$diff;
        header("location:logout.php");          
    }else {
        $time=microtime(date("H:i:s"));
    $_SESSION['last_active']=$time; #Updating the time 
    //echo 'More time added the time was!'.$diff;
    }
}else{
    //if there is no last active then we create it over here
    $time=microtime(date("H:i:s"));
    $_SESSION['last_active']=$time;
}}*/-->
