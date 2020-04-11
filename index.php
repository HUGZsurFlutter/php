<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="login.css">
    <title>Login Form in PHP With Session</title>
</head>
<body
    <div style="background-image: url('couple.jpg');">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Coucou ptit coquin</h3>
                    </div>
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="Email" placeholder="Email" class="form-control mb-3">
                            <input type="password" name="Pass" placeholder=" Password" class="form-control mb-3">
                            <br><br>    
                            <button class="button1" name="Login">Login</button>
                            <button class="button2" name="Register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>