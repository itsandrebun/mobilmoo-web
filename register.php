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
                    $phone_number_validation = "";
                    $fullname_validation = "";
                    $password_validation = "";
                    $email_validation = "";
                    $checkbox_validation = "";
                    $user_fullname = "";
                    $user_email = "";  
                    $user_phonenumber = "";
                    $is_checked = false;
                    if(isset($_POST['register'])){
                        $user_fullname = $_POST['fullname'] ;
                        $user_email = $_POST['email'];  
                        $user_phonenumber = $_POST['phone_number'];
                        if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['password']) && isset($_POST['agree'])) { 
                            $user_fullname = $_POST['fullname'] ;
                            $user_email = $_POST['email'];  
                            $user_phonenumber = $_POST['phone_number'];
                            $user_password= password_hash($_POST['password'],PASSWORD_DEFAULT);  
                            $con = mysqli_connect('localhost','root','','mobilmoo') or die(mysql_error());  
                            // mysql_select_db('user_registration') or die("cannot select DB");  
                        
                            $query="SELECT * FROM user WHERE user_email='".$user_email."' or user_phonenumber='".$user_phonenumber."'";
                            $data = $con->query($query);
                            $is_checked = true;
                            // $numrows=mysql_num_rows($query);  
                            if($data->num_rows == 0)  
                            {  
                                $sql="INSERT INTO user(user_fullname,user_email,user_phonenumber,user_password) VALUES('".$user_fullname."','".$user_email."','".$user_phonenumber."','".$user_password."')";  
                            
                                $result= $con->query($sql);  
                                if($result){
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Successfully Created")';
                                    echo '</script>';
                                    header("Location:register.php"); 
                                } else {
                                    echo '<script language="javascript">';
                                    echo 'alert("Cannot create this account")';
                                    echo '</script>';
                                    // echo "Failure!".$con->error;  
                                }
                        
                            } else {
                                echo "<script language='javascript'>alert('That username already exists! Please try again with another.');</script>";
                            }  
                        } else {
                            if(empty($_POST['fullname'])){
                                $fullname_validation = "Fullname is required";
                            }
                            if(strlen($_POST['fullname']) < 2 || strlen($_POST['fullname']) > 50){
                                $fullname_validation = "Fullname must contain min 2 characters and max 50 characters";
                            }
                            if(empty($_POST['phone_number'])){
                                $phone_number_validation = "phone number is required";
                            }
                            if(!is_numeric($_POST['phone_number'])){
                                $phone_number_validation = "Phone Number must be number";
                            }
                            if(strlen($_POST['phone_number']) < 10 || strlen($_POST['phone_number']) > 15){
                                $phone_number_validation = "Phone number must contain min 10 characters and max 15 characters";
                            }
                            if(empty($_POST['email'])){
                                $email_validation = "Email is required";
                            }
                            if(strpos($_POST['email'], '@') == false){
                                $email_validation = "Email must contain @";
                            }
                            if(strlen($_POST['email']) < 10){
                                $email_validation = "Email must contain min 10 characters";
                            }
                            if(empty($_POST['password'])){
                                $password_validation = "Password is required";
                            }
                            if(!preg_match('/[A-Z]/', $_POST['password'])){
                                $password_validation = "Password must contain at least 1 uppercase";
                            }
                            if(strlen($_POST['password']) < 6){
                                $password_validation = "Password must contain min 6 characters";
                            }
                            if(!isset($_POST['agree'])){
                                $checkbox_validation = "You should check the box to agree with this terms and conditions";
                                $is_checked = false;
                            }else{
                                $is_checked = true;
                            }
                            // echo "All fields are required!";  
                        }
                    }
                ?>
                <form method="POST" id="register_form">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" id="fullname" class="form-control" name="fullname" placeholder="example: mobilmoo" autocomplete="off" value="<?php echo $user_fullname;?>">
                        <?php if($fullname_validation != ""):?>
                            <span class="form-text text-muted invalid-feedback-red"><?= $fullname_validation;?></span>
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="example: 08123456789" autocomplete="off" value="<?php echo $user_phonenumber;?>">
                        <?php if($phone_number_validation != ""):?>
                            <span class="form-text text-muted invalid-feedback-red"><?= $phone_number_validation;?></span>
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="example: example@email.com" autocomplete="off" value="<?php echo $user_email;?>">
                        <?php if($email_validation != ""):?>
                            <span class="form-text text-muted invalid-feedback-red"><?= $email_validation;?></span>
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="6+ Characters, 1 Capital Letter" autocomplete="off">
                        <?php if($password_validation != ""):?>
                            <span class="form-text text-muted invalid-feedback-red"><?= $password_validation;?></span>
                        <?php endif;?>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="agree" <?php echo ($is_checked == true ? 'checked' : '');?>>
                        <label class="form-check-label" for="flexCheckChecked">
                            I agree to accept our Privacy Policy. Terms of Service and notification settings 
                        </label>
                        <?php if($checkbox_validation != ""):?>
                            <span class="form-text text-muted invalid-feedback-red"><?= $checkbox_validation;?></span>
                        <?php endif;?>
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
    <script>
        function insertAfter(referenceNode, newNode) {
            referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
        }

        var el = document.createElement("input");
        // el.innerHTML = "test";
        el.setAttribute("name","register");
        el.value = "register";
        el.setAttribute("type","hidden");
        var div = document.getElementById("fullname");
        insertAfter(div, el);
    </script>
  </body>
</html>