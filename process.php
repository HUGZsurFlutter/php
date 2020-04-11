<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['Email']) || empty($_POST['Pass']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from User where Email='".$_POST['Email']."' and Pass='".$_POST['Pass']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['Email'];
                header("location:welcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct Email and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>

<?php 
require_once('connection.php');
    if(isset($_POST['Register']))
    {
        header("location:register.php");
        
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>


<?php 
require_once('connection.php');


    if(isset($_POST['Validate']))
    {
        if(empty($_POST['Email']) || empty($_POST['Pass']) || empty($_POST['Name']) || empty($_POST['Firstname']) || empty($_POST['Sexe']) || empty($_POST['DateN']))
       {
            header("location:register.php?Empty= Please Fill in the Blanks");
       }
       
    else{
        
        
        $Name = $_POST['Name'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Pass = $_POST['Pass'];
        $Sexe = $_POST['Sexe'];
        $DateN = $_POST["DateN"];
        
        
        $sql = "INSERT INTO User (Name, Firstname, Email, Pass, Sexe, DateN, Grade) VALUES ('$Name', '$Firstname', '$Email', '$Pass', '$Sexe', '$DateN', 'user')";
        
        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
        
        }
    }
?>