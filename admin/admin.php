<?php
require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
        <title>Admin Login Page</title>
        <style>div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        div .btn {
            background-color: #28a745;
        }
    </style>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form method="POST">
                    <div class="field input-field">
                        <input type="text" placeholder="Admin Name" class="input" name="admin_name">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="admin_pass">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button name="login">Login</button>
                    </div>
                </form>
            </div>
    </section>

    <?php
    if (isset($_POST['login'])) {
        $query = "SELECT * FROM `admin_login` WHERE `admin_name` = '$_POST[admin_name]' AND `admin_pass` = '$_POST[admin_pass]'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['AdminLoginId'] = $_POST['admin_name'];
            header("location: dashboard.php");
        } else {
            echo "<script>alert('Incorrect username or password');</script>";
        }
    }
    ?>

</body>

</html>