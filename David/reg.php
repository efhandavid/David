<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="reg.css">
    <title>Registration</title>
</head>
<body>

    <div class="cont">
        <form action="reg-index.php" method="post" class="ref-form">
            <h1>Registration</h1>
            <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
                <div class="fl">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="fname" >
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lname" >
                        <label for="floatingPassword">Last Name</label>
                    </div>
                </div>
                <div class="fl">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name" name="mname" >
                        <label for="floatingInput">Middle Name</label>
                    </div>
                    <div class="form-floating mb-3 emp">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="uname" >
                        <label for="floatingPassword">Username</label>
                    </div>
                </div>
                <div class="form-floating em mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" >
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="fl">
                    <div class="form-floating mb-3 emp">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass" >
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3 emp">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="cpass" >
                        <label for="floatingPassword">Comfirm Password</label>
                    </div>
                </div>
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        View Terms & Regulations
                    </a>
                </p>
                <div class="collapse mb-3" id="collapseExample">
                    <div class="card card-body">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Error earum tenetur impedit quas sapiente itaque blanditiis praesentium magnam minima, sint natus rerum placeat vero aliquid quisquam rem voluptatibus perferendis ipsam.
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">Agree Terms & Regulations</label>
                </div>
                <button type="submit">Sign Up</button>
                <a href="loginform.php" class="ca">Already have an account?</a>
            </form>
        </form>
    </div>



<script src="https://kit.fontawesome.com/4f96a637fb.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>