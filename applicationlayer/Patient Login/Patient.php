<?php include('..\..\datalayer\server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient Login</title>
        <link rel="stylesheet" href="style2.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <h1 id="title">Patient Login</h1>

                <form method="post" action="Patient.php" class="Aform">

                    <?php include ('..\..\datalayer\errors.php')?>

                    <div class="input-group">
                        <div class="input-field" id="nameField">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="UserID" placeholder="User ID">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>

                        <div class="btn-field">
                            <button type="submit" name="Patient" class="btnA">Login</button>
                        </div>
                        
                        <p>
		                    Not a member? <a href="Patient Register.php">Sign Up </a>
	                    </p>
                        
                    </div>
                    
                </form>
            </div>
        </div>

    
    </body>
</html>