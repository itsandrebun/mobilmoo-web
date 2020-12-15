<?php
    $title = "Register - Mobilmoo";
?>
<?php include 'templates/header.php';?>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 auth-form">
                <div class="mt-3 mb-4">
                    <h2 class="auth-title" style="color:#086dff;cursor:pointer" onclick="window.location.href = 'index.php'">mobilmoo</h2>
                </div>
                <div class="mb-5">
                    <span>Let's get to know each other.</span>
                    <h1 class="auth-title">Sign Up to Mobilmoo</h1>
                    <span class="redirect-to-login">Already have an account? <a href="login.php">Sign In</a></span>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="example: mobilmoo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="example: 08123456789">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="example: example@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="6+ Characters, 1 Capital Letter">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="agree">
                        <label class="form-check-label" for="flexCheckChecked">
                            I agree to accept our Privacy Policy. Terms of Service and notification settings 
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 p-3 mt-3" style="text-align:left;font-weight:bold">Sign Up <i style="float:right" class="fa fa-arrow-right mt-1"></i></button>
                </form>
            </div>
            <div class="col-md-6 mobilmoo-introduction">
                <h1 class="pt-5">mobilmoo</h1>
                <p class="align-self-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                <img src="img/mobilmoo_person_icon.png" alt="">
            </div>
        </div>
    </div>

    <?php include "templates/footer.php";?>
  </body>
</html>