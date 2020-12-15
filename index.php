<?php
    $title = "Home - Mobilmoo";
?>
<?php include 'templates/header.php';?>
  <body>
    <?php
        session_start();
    ?>
    <div class="container-fluid">
        <div class="opening">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-size:25px;" href="#">Mobilmoo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Buy a Car
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" style="color:#000000">New Cars</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:#000000">Preowned Cars</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Car Inspection</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Community</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <button class="btn btn-white" id="sell_car_button">Sell Car</button>
                            </li>
                            <?php if(isset($_SESSION['user'])):?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" style="color:#000000">Profile</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:#000000">Logout</a></li>
                                </ul>
                            </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row content">
                <div class="col-md-5">
                    <p>Find the car you wanted without any hassle.</p>
                    <button class="btn btn-white w-50 mt-3" id="browse_car_button" style="text-align:left">Browse Car <img src="img/blue_arrow_right.png" style="float:right" alt=""></button>
                </div>
                <div class="col-md-7 d-flex justify-content-end">
                    <img src="img/car_opening.png" id="car-opening" alt="">
                </div>
            </div>
            <div class="go-to-list">
                <i class="fa fa-angle-double-down"></i>
            </div>
        </div>
        <div class="explanation pt-5 pb-5">
            <h1>All-in-One Solution For Your Car-Buying Experience</h1>
            <span>This will help you in any way you needed.</span>
        </div>
        <div class="explanation-list">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Do this quiz to know which car is the best for you!</h5>
                            <div class="line"></div>
                            <p class="card-text">By answering some questions in Moobot, we could pick and give some recommendations on which car suit you the best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Car inspection</h5>
                            <div class="line"></div>
                            <p class="card-text">Doing car inspection before selling the car will make people who want to buya car feel more assured. Or if you just want to check your car, you can do it here!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Our community</h5>
                            <div class="line"></div>
                            <p class="card-text">Forumoo is a community that we provide as a place for people, especially car lovers to communicate with each other. You could discuss about anything that are car-related.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inspection-booking">
            <!-- <div class="inspection-booking-picture">
                <img src="img/flying_person.png" alt="">
            </div> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="p-5" style="padding-left:5rem!important;padding-right:5rem!important">
                        <h1>Book an Inspection</h1>
                        <p>The car inspection is of course will be done by professionals. Get a detailed online report for your car condition by booking an inspection!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stepper">
                        <form class="p-5">
                            <div class="mb-3 row">
                                <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fullname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fullname" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fullname" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <button class="btn btn-primary" id="next_button" style="text-align:left;">Next <img src="img/white_arrow_right.png" style="float:right;margin-top:-2px;" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-list pt-5">
            <div class="car-list-title">
                <h1>Featured Cars</h1>
                <span>Find your next vehicle with the best quality and deal here!</span>
            </div>
            <div class="car-list-content">
                <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="new-car-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Car</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="used-car-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Used Car</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="new-car-tab">
                        <div class="scrollable-content">
                            <div class="row flex-nowrap">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <img src="img/MINI-Cooper-S-Convertible-F57-09-1024x683.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <div class="card-detail">
                                                <span>DKI Jakarta</span>
                                                <span>2019</span>
                                                <span>New Car</span>
                                            </div>
                                            <span class="car-price">120000000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <div class="card-detail">
                                                <span>DKI Jakarta</span>
                                                <span>2019</span>
                                                <span>New Car</span>
                                            </div>
                                            <span class="car-price">120000000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <div class="card-detail">
                                                <span>DKI Jakarta</span>
                                                <span>2019</span>
                                                <span>New Car</span>
                                            </div>
                                            <span class="car-price">120000000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <div class="card-detail">
                                                <span>DKI Jakarta</span>
                                                <span>2019</span>
                                                <span>New Car</span>
                                            </div>
                                            <span class="car-price">120000000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <div class="card-detail">
                                                <span>DKI Jakarta</span>
                                                <span>2019</span>
                                                <span>New Car</span>
                                            </div>
                                            <span class="car-price">120000000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="used-car-tab">
                        <div class="row flex-nowrap">
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <div class="card-detail">
                                            <span>DKI Jakarta</span>
                                            <span>2019</span>
                                            <span>New Car</span>
                                        </div>
                                        <span class="car-price">120000000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <div class="card-detail">
                                            <span>DKI Jakarta</span>
                                            <span>2019</span>
                                            <span>New Car</span>
                                        </div>
                                        <span class="car-price">120000000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moobot-recommendation">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/person_chatting.png" id="person_chatting" alt="">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div>
                        <h1>Still don’t know which car to choose?</h1>
                        <p>MooBot can help you find the car that are best-suited for you</p>
                        <button class="btn btn-white" style="text-align:left" id="try_moobot">Try MooBot Now <img src="img/blue_arrow_right.png" style="float:right" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mobilmoo-footer row d-flex align-items-center justify-content-center">
            <div class="col-md-4">
                <h1 class="mobilmoo-footer-logo">mobilmoo</h1>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="footer-title">Company</h5>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <a href="void::javascript(0)">About Us</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-title">Help</h5>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <a href="void::javascript(0)">FAQ</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">Contact Us</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">TnC</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-title">Social Media</h5>
                        <ul class="list-unstyled mt-3 social-media">
                            <li>
                                <a href="void::javascript(0)">FaceBook</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">Instagram</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">TikTok</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">Twitter</a>
                            </li>
                            <li>
                                <a href="void::javascript(0)">Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script>
        const el = document.getElementById('separatedCarList');
        // set scroll position in px
        // el.scrollLeft = 60;
    </script>
  </body>
</html>