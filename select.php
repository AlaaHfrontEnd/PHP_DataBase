<?php




    //start connection
    $co = mysqli_connect('localhost', 'root', '', 'fs8_profile');

    
    $query = "SELECT * FROM `user`";
    

    $q = mysqli_query($co, $query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 

$a = [];
while($res = mysqli_fetch_assoc($q)){
    $a [] = $res;
    foreach($res as $k => $v){
     

        echo  $k . ": " . $v . "<hr>";
        
       
        
        
    }
}



?>
    

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

