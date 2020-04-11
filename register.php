<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="register.css">
    <title>Login Form in PHP With Session</title>
</head>
<body
    <div style="background-image: url('couple.jpg');">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Register ptit coquin</h3>
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
                            <input type="text" name="Name" placeholder="Name" class="form-control mb-3">
                            <input type="text" name="Firstname" placeholder="Firstname" class="form-control mb-3">
                            <input type="text" name="Email" placeholder="Email" class="form-control mb-3">
                            <input type="password" name="Pass" placeholder="Mot de passe" class="form-control mb-3">
                            <input type="text" id="DateN" name="DateN" placeholder="YYYY-MM-DD - Date de Naissance" class="form-control mb-3"/>
                            <br><br>

                            <select class=Sexe name="Sexe" id="Sexe"><option value="Homme">Homme</option><option value="Femme">Femme</option><option value="Trans">Trans</option><option value="Fauve">Fauve</option></select>
                            
                            <br><br>
                            <button class="button1" name="Validate">Validate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>