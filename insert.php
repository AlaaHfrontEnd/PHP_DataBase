<?php


if(isset($_POST['username'])){
    //start connection
    $co = mysqli_connect('localhost', 'root', '', 'fs8_profile');

    // data from login form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    

    mysqli_query($co, $query);

    // For check if query has been executed or not
    $res = mysqli_affected_rows($co);
    if($res==1){
        echo "<div style='  margin: auto; margin-top:5%;
        width: 600px;
        box-shadow: 5px 10px 8px 10px #b2ccf3;
        margin-top: 5%;
        padding: 20px;
        font-size: 20px;
        '>Data has been inserted successfully!<i class='fas fa-check' style='margin-left:1%;'></i></div>";

    }else{
        echo "<div style='  margin: auto; margin-top:5%;
        width: 100px;
        box-shadow: 5px 10px 8px 10px #b2ccf3;
        margin-top: 5%;
        padding: 20px;
        font-size: 20px;
        color:red;
        '>Error!<i class='fas fa-check' style='margin-left:1%;'></i></div>";
    }
}
