


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>

    

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="js/app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <pre>
        $_POST:
        <?php 
            var_dump($_POST);
        ?>
    </pre>
    <?php 

        
            // Database connection parameters
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $database = "userlogins";

            // Attempt to establish a connection to MySQL server
                    

                    

            try {
                    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);

                    if($conn){
                        echo "connection succ!";
                    }

                    if($_SERVER['REQUEST_METHOD'] =='POST'){
                        $firstname = $_POST['firstName'];
                        $lastname = $_POST['lastName'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // insert data
                        $insertQuery = "INSERT INTO `logininfo` (`firstName`, `lastName`, `email`, `password`, `dt`) VALUES ('$firstname', '$lastname', '$email', '$password', current_timestamp());";
                        $result = mysqli_query($conn, $insertQuery);

                        if($result){
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Your entry has been submitted successfully!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    </div>';
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>';
                        }
                    }
            } catch (Exception $e) {
                echo "Error: " .$e-> getMessage();
            }
            // try{
            //     if($_SERVER['REQUEST_METHOD'] =='POST'){
            //         $firstname = $_POST['firstName'];
            //         $lastname = $_POST['lastName'];
            //         $email = $_POST['email'];
            //         $password = $_POST['password'];

                    
            //     }


                
            // } catch (Exception $e){
            //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //                     <strong>Success!</strong> Your entry has been submitted successfully!
            //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //                         <span aria-hidden="true">×</span>
            //                     </button>
            //                     </div>';
            // }
    ?>

    

    <div class="container">
        <div class="title">
            <h1>Signup</h1>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form">
                <div class="form-row name">
                    <!-- <label for="firstName">First Name:</label> -->
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                </div>

                <div class="form-row name">
                    <!-- <label for="lastName">Last Name:</label> -->
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>

                <div class="form-row email">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-row password">
                    <!-- <label for="password">Password:</label> -->
                    <input type="password" id="password" name="password" placeholder="Create Password" onkeyup="checkPassword()" required>
                </div>

                <div class="form-row conf-password">
                    <!-- <label for="confirm password">Confirm Password:</label> -->
                    <input type="password" id="conf-password" name="confirm password" placeholder="Confirm Password" onkeyup="checkPassword()" required>
                    <span class="message">Passwords don't match</span>
                </div>
            </div>


            <div class="form-button">
                <button type="submit">Signup</button>
            </div>

            <div class="login-link">
                <span>Already have an account? <a href="#">Login</a></span>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>

