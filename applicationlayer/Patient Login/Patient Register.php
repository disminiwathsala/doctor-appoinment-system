<?php include('..\..\datalayer\server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient Register</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <h1 id="title">Patient Register</h1>
                <form method="post" action="Patient Register.php" enctype="multipart/form-data">

                    <?php include ('..\..\datalayer\errors.php'); ?>

                    <div class="input-group">
                        <div class="input-field">
                            <i class="fa-solid fa-id-card"></i>
                            <input type="text" name="UserID" placeholder="User ID">
                        </div>

                        <div class="input-field">
                             <i class="fa-solid fa-user"></i>
                            <input type="name" name="Name" placeholder="Name">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-address-card"></i>
                            <input type="address" name="Address" placeholder="Address">
                        </div>
    
                            <div class="input-field">
                                <i class="fa-solid fa-square-phone"></i>
                                <input type="mobile-number" name="ContactNumber" placeholder="Mobile No">
                            </div>

                            <div class="input-field">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" name="Email" placeholder="Email">
                            </div>
    
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="password" placeholder="password">
                            </div>

                            <div class="input-field">
                                <i class="fa-solid fa-venus-mars"></i>
                                <input type="gender" name="Gender" placeholder="Gender">
                            </div>

                        <div class="btn-field">
                            <button type="submit" name="Register" class="btn">Register</button>
                        </div>

                        <p>
                            Already a member? <a href="Patient.php">Sign in </a>
                        </p>

                    </div>
                    
                </form>
            </div>
        </div>

    </body>
</html>