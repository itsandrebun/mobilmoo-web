<?php
    $title = "Login - Mobilmoo";
?>
<?php include 'templates/header.php';?>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 auth-form">
                <div>
                    <div class="mt-3">
                        <h2 class="auth-title" style="color:#086dff;cursor:pointer;text-align:left" onclick="window.location.href='index.php'">mobilmoo</h2>
                    </div>
                    <form class="d-flex align-items-center justify-content-start h-100" style="min-height:90vh">
                        <div>
                            <div class="mb-5">
                                <span>Hello! Nice to meet you.</span>
                                <h1 class="auth-title">Sign Up to Mobilmoo</h1>
                                <span class="redirect-to-login">Don't have an account? <a href="register.php">Register</a></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email/Phone Number</label>
                                <input type="text" class="form-control" name="username" placeholder="example: mobilmoo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="6+ Characters, 1 Capital Letter">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 p-3 mt-3" style="text-align:left;font-weight:bold">Sign In <i style="float:right" class="fa fa-arrow-right mt-1"></i></button>
                        </div>
                    </form>
                </div>
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