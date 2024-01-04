<?php
include_once "dbconnect/connection.php";
if (isset($_POST['submit'])) {
    $matricule = $_POST['matricule'];
    $schoolem = $_POST['schoolem'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
    $query = "INSERT INTO form ( `matricule`, `schoolem`, `email`, `phone`,`password`,`confirmpass`) VALUES ('$matricule','$schoolem','$email','$phone','$password','$confirmpass');";
    // echo $query;  

    if (mysqli_query($con, $query)) {

        header("Location: regis.php");
        // echo "<div class='alert alert-danger alert-dismissible'> 
        //     <button type='submit' class='close btn btn-success p-3 m-3 fs-5' data-dismiss='alert'>X</button>               
        //     New Student Was Created successfully 
        //     </div>";     
    } else {
        echo "<div class='alert alert-danger alert-dismissible'> 
        //     <button type='sumbit' class='close btn btn-success p-3 m-3 fs-5' data-dismiss='alert'>X</button> 
        //     Error Creating Student Because " . mysqli_error($con) . "             </div>";
        // echo "inside off";

        // } 
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">

</head>

<body>

    <img src="./images/sk.jpg" alt="" style="width: 100%; height:95vh">
    <div class="container">

        <form action="" method="post" class="forms">
            <div class="field">
                <div class="start">
                    <!-- <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 512 512">
                            <path
                                d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                        </svg>
                    </a> -->
                    <div class="img">
                        <img src="./images/caps.jpg" alt="" srcset="" style="width:50px;height:50px;">
                    </div>
                    <h2>IUGET</h2>
                    <h7>Enter your personal details to <strong>create an account</strong></h7>
                </div>
                <form action="regis.php" method="POST">
                    <input type="num" name="" id="" placeholder="Matricule No">
                    <br>
                    <input type="text" name="" id="" placeholder="School email adress">
                    <br>
                    <input type="text" name="" id="" placeholder="Alternative email adress">
                    <br>
                    <input type="num" name="" id="" placeholder="telephone No(+237)">
                    <br>
                    <input type="password" name="" id="" placeholder="Enter password" require>
                    <br>
                    <input type="password" name="" id="" placeholder="Confirm password" require>
                    <br>
                    <input name="submit" type="submit" class="" value="create account">
                    <div class="end">
                        <a href="login.php" class="one">Already has
                            an account</a>
                        <a href="createpsd.php" class="two">Forgot password?</a>
                        <a href="" class=" three">Live chat support</a>
                    </div>
                </form>

            </div>
        </form>
    </div>

</body>

</html>