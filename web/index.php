<?php

if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("connection t0 this database failed due to". mysqli_connect_error());
  }
  //echo "Success connectiong to database";
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $desc = $_POST['desc'];
  $sql = "INSERT INTO `chat room`.`login` ( `name`, `age`, `gender`, `email`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$desc', current_timestamp()); ";

  if($con->query($sql) == true){
      echo "Successfully inserted";
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to chat room</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="wb" src="wb.jpg" ait="chat room">
    <div class="container">
        <h1>wellcome to our travel agency</h1>
        <p>Enter your detail and submit to book your journey</p>
    

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="age" placeholder="Enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter anr other information here"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js "></script>
</body>
</html>