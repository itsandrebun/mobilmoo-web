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
                <?php
                    // print_r($_POST);
                    if(!empty($_POST['email']) && !empty($_POST['phone_number'])) { 
                        $user_fullname = $_POST['fullname'] ;
                        $user_email = $_POST['email'];  
                        $user_phonenumber = $_POST['phone_number'];
                        $user_password= password_hash($_POST['password'],PASSWORD_DEFAULT);  
                        $con = mysqli_connect('localhost','root','','mobilmoo') or die(mysql_error());  
                        // mysql_select_db('user_registration') or die("cannot select DB");  
                    
                        $query="SELECT * FROM user WHERE user_email='".$user_email."' or user_phonenumber='".$user_phonenumber."'";
                        $data = $con->query($query);
                        // $numrows=mysql_num_rows($query);  
                        if($data->num_rows == 0)  
                        {  
                            $sql="INSERT INTO user(user_fullname,user_email,user_phonenumber,user_password) VALUES('".$user_fullname."','".$user_email."','".$user_phonenumber."','".$user_password."')";  
                        
                            $result= $con->query($sql);  
                            if($result){  
                                echo "Account Successfully Created";  
                            } else {  
                                echo "Failure!".$con->error;  
                            }  
                    
                        } else {  
                            echo "That username already exists! Please try again with another.";  
                        }  
                    } else {  
                        echo "All fields are required!";  
                    }
                ?>
                <form method="POST" id="register_form">
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
                    <button type="button" onclick="document.getElementById('register_form').submit();" id="submit_register_button" class="btn btn-primary btn-lg w-100 p-3 mt-3" style="text-align:left;font-weight:bold">Sign Up <i style="float:right" class="fa fa-arrow-right mt-1"></i></button>
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