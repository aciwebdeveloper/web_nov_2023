<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-primary">

<div class="container">

    <div class="row justify-content-center" >
        <div class="col-md-3"></div>
        <div class="col-md-6 " style="background: aliceblue; padding: 20px; border-radius: 10px; margin-top: 50px;">
            <h2 class="text-center" style="margin-top: 15px; color: black; padding: 10px;">Login Form</h2>
            <form action="../insert.php" enctype="multipart/form-data" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1" style="color: black">Email address</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2" style="color: black">Password</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                </div>

                <?php
                if (isset($_SESSION['error']))
                { ?>
                    <p class="alert alert-error text-danger" style="margin-top: 10px;"><?php echo $_SESSION['error']; $_SESSION['error']=''; ?></p>
                 <?php }else if (isset($_SESSION['success'])) { ?>
                    <p class="alert alert-success" style="margin-top: 10px;"></p>
                <?php }?>

                <!-- Submit button -->
                <button type="submit" name="login_button" value="login_button" class="btn btn-primary btn-block mb-4" style="margin-top: 10px;">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center" style="color: black">
                    <p>Not a member? <a href="../class-3.php">Register</a></p>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>
