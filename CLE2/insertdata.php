<?php

/** @var mysqli $db */
require_once "connect.php";

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
    $comment = $_POST['comment'];
    $date = $_POST['date'];
    $timeset = $_POST['time'];
    $timelabel = $_POST['timelabel'];


    $query = "INSERT INTO `information`(`id`, `firstname`, `lastname`, `date`, `time`, `phonenumber`, `email`, `paymethod`, `opmerking`) 
    VALUES ('','$fname','$lname','$date','$timeset','$phonenumber','$email', '$payment', '$comment')";

    mysqli_query($db, $query);

    $query = "UPDATE `times` SET `$timelabel` ='Bezet' WHERE date = '$date'";

    mysqli_query($db, $query);

    header('Location: confirmed.php');

}



//$hours = date('H');
//$add = date("Y-m-d", strtotime("+1 month"));
//
//if($hours == 23){
//
//    $query = "INSERT INTO times (`id`, `date`, `time`, `time2`, `time3`, `time4`, `time5`)
//            VALUES ('','$add','12:00-12:30','12:30-13:00','13:00-13:30','13:30-14:00','14:00-14:30')";
//
//    mysqli_query($db, $query);

?>



