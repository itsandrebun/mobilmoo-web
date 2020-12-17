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
                    <?php
                        $username_validation = "";
                        $password_validation = "";
                        $user_name = "";
                        if(isset($_POST['login'])){
                            $user_name=$_POST['username'];
                            if(!empty($_POST['username']) && !empty($_POST['password'])) {  
                                $user_name=$_POST['username'];  
                                $user_pass=$_POST['password'];  
                                        
                                $con=mysqli_connect('localhost','root','','mobilmoo') or die(mysql_error());
                                        
                                $query="SELECT * FROM user WHERE user_email='".$user_name."' or user_phonenumber='".$user_name."'"; 
                                $data = $con->query($query);
                                $user_data = $data->fetch_assoc();
                                if($data->num_rows != 0 && password_verify($user_pass, $user_data['user_password']))  
                                {
                                    session_start();
                                    $_SESSION['sess_username'] = $user_name;
                                    header("Location: index.php"); 
                                } else {  
                                    echo "<script language='javascript'>alert('Invalid username or password!')</script>";  
                                }  
                                        
                            } else {
                                //validate empty username
                                if($_POST['username'] == ""){
                                    $username_validation = "Username is required";
                                }
                                //validate empty password
                                if(empty($_POST['password'])){
                                    $password_validation = "Password is required";
                                }
                            }
                        }
                    ?>
                    <form method="POST" id="user_login_form" class="d-flex align-items-center justify-content-start h-100" style="min-height:90vh">
                        <div>
                            <div class="mb-5">
                                <span>Hello! Nice to meet you.</span>
                                <h1 class="auth-title">Sign In to Mobilmoo</h1>
                                <span class="redirect-to-register">Don't have an account? <a href="register.php">Register</a></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email/Phone Number</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $user_name;?>" placeholder="example: mobilmoo">
                                <?php if($username_validation != ""):?>
                                    <span class="form-text text-muted invalid-feedback-red"><?= $username_validation;?></span>
                                <?php endif;?>
                            </div>
                            <input type="hidden" name="login" value="login">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Input password...">
                                <?php if($password_validation != ""):?>
                                    <span class="form-text text-muted invalid-feedback-red"><?= $password_validation;?></span>
                                <?php endif;?>
                            </div>
                            <button type="button" onclick="document.getElementById('user_login_form').submit();" class="btn btn-primary btn-lg w-100 p-3 mt-3" style="text-align:left;font-weight:bold">Sign In <i style="float:right" class="fa fa-arrow-right mt-1"></i></button>
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