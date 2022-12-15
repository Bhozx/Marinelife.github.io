<?php
         
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];                       
    $username = $_POST["username"];
    $pswrd = $_POST["pwd"];
    $pswrd = md5("$pswrd");                    
    $email = $_POST["email"];                   
    $phone = $_POST["number"];
    $gender = $_POST["gender"];  

    //database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "marinelifedb" ;

    $conn = new mysqli($host, $user, $password, $db);
        if (mysqli_connect_error()) {
            die('connection error' . mysqli_connect_errno());
        } else {
            $sql = "INSERT INTO registration (firstname, lastname, username, pswrd, email, phone, gender) values ('$firstname', '$lastname', '$username', '$pswrd', '$email', '$phone', '$gender')";
        }
        if ($conn->query($sql)) {
            echo "";
        }else {
            echo "error" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
?>


<html>
<head>
        <link rel="stylesheet" href="summary_page.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
        <title>Registration summary</title>
</head>
<body>

<!--Summary Page-->
<div class="container">
    <div class="container1">
        <form action="login.php" method="POST">
            <div class="title"><h1>You Have Successfully Registered<h1></div>
            <p>Worry not as your data will be safely protected in accordance to the Data Privacy Act.
                Should there be any negligence, we are therefore accountable for the mistake.
            </p>
            <br>
            <h4>Thank You For Joining Us "<?php echo $username; ?>"<h4>
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</div>
  
</body>
</html>