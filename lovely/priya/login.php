<?php
include("connection.php");

session_start();

if($_POST['login']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $logincheck = $sql->prepare("select * from users where username = ?");
    $logincheck->bind_param('s',$username);
    $logincheck->execute();
    $logincheck_res = $logincheck->get_result();
    if($logincheck_res->num_rows>0){
        $logincheck_data = $logincheck_res->fetch_assoc();
        if($logincheck_data['password'] == $password){
            // echo "<script>alert('Login successfully')</script>";
            // echo "<script>location.href = 'index.php'</script>";
            header("Location:index.php");
            $_SESSION['user_id'] = $logincheck_data['id'];
        }else{
            echo "<script>alert('Incorrect Password')</script>";
        }
    }else{
        echo "<script>alert('User not found')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>

<body>

    <!-- <<<<<<< Login Section >>>>>>>> -->
    <div class="box">
        <div class="box2">
            <!-- <<< Form Area>>>>>> -->
            <div class="form">
                <h2>Login</h2>
                <form action="" method="post" style="display: block !important;">
                    <!-- <<< Form Area Username>>>>>> -->
                    <div class="input-box">
                        <input type="text" name="username" required="required">
                        <span>Username</span>
                        <i></i>
                    </div>
                    <!-- <<< Form Area Password>>>>>> -->
                    <div class="input-box">
                        <input type="password" name="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <!-- <<< Form Area links>>>>>> -->
                    <div class="links">
                        <a href="#">Forgote Password</a>
                        <a href="#">Sign Up</a>
                    </div>
                    <!-- <<< Form Area subit button>>>>>> -->
                    <input type="submit" value="Login" name="login">
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>