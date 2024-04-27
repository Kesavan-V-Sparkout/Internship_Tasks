<!DOCTYPE html>
<html lang="en">
    <?php require './registerLogic.php' ?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../styles/main.css" href="">
    <title>User Authentication System</title>
</head>
<body class="d-flex p-5 bg-primary">
    <div class="container p-5 rounded" style="width: 500px;">
        <form method="POST" action="" enctype="multipart/form-data" id="register-form">
            <h1 class="text-center fw-bold">ShopZone</h1><br>
            <p class="fs-3 text-center fw-semibold">Sign up</p>
            <hr>
            <div class="form-group mt-4">
                <label class="fs-5 fw-medium">First name</label>
                <input type="text" class="form-control" id="firstname" name="fname" placeholder="Enter your first name" value="<?php if(isset($firstName)) echo $firstName; ?>">
                <?php echo $firstNameErr; ?>
            </div>
            <div class="form-group mt-4">
                <label class="fs-5 fw-medium">Last name</label>
                <input type="text" class="form-control" id="lastname" name="lname" placeholder="Enter your last name" value="<?php if(isset($lastName)) echo $lastName; ?>">
                <?php echo $lastNameErr; ?>
            </div>
            <div class="form-group mt-4">
                <label class="fs-5 fw-medium">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(isset($email)) echo $email; ?>">
                <?php echo $emailErr; ?>
            </div>
            <div class="form-group mt-4">
                <label class="fs-5 fw-medium">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php if(isset($password)) echo $password; ?>">
                <?php echo $passwordErr; ?>
            </div>
            <div class="form-group mt-4">
                <label class="fs-5 fw-medium">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" value="<?php if(isset($confirmPassword)) echo $confirmPassword; ?>">
                <?php echo $confirmPasswordErr ?>
            </div>
            <button type="submit" class="btn btn-primary mt-4" name="register">Register</button><br><br>
            <a href="../components/login.php" class="text-danger">Already have an account?</a>
        </form>
    </div>
</body>
</html>