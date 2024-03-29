<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIU CSE SOCIETY </title>

    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-chevron-right"></i> SIU CSE SOCIETY </a>

        <nav class="navbar">
        <a href="index2.php">home</a>
            <a href="results.php">Result</a>
            <a href="about.php">about</a>
            <a href="login.php">Login</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->


    <div class="container register" style="margin-top: 100px;">
        <div class="row";>
            <div class="col-md-2 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
    
            </div>
            <div class="col-md-10 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Team Leader</h3>
                        <div class="row register-form">
                            <div class="col-md-3">
                                <p>Member 1 (Team Leader)</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Roll Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Registration Number *"
                                        value="" />
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select Department
                                        </option>
                                        <option>CSE</option>
                                        <option>ECE</option>
                                        <option>EEE</option>
                                        <option>BBA</option>
                                        <option>LLB</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Current Semester
                                        </option>
                                        <option>1/1</option>
                                        <option>1/2</option>
                                        <option>2/1</option>
                                        <option>2/2</option>
                                        <option>3/1</option>
                                        <option>3/2</option>
                                        <option>4/1</option>
                                        <option>4/2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="11" maxlength="11" name="txtEmpPhone"
                                        class="form-control" placeholder="Team Leader Phone *" value="" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <!-- member 2  start-->

                                <p>Member 2</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Roll Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Registration Number *"
                                        value="" />
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select Department
                                        </option>
                                        <option>CSE</option>
                                        <option>ECE</option>
                                        <option>EEE</option>
                                        <option>BBA</option>
                                        <option>LLB</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Current Semester
                                        </option>
                                        <option>1/1</option>
                                        <option>1/2</option>
                                        <option>2/1</option>
                                        <option>2/2</option>
                                        <option>3/1</option>
                                        <option>3/2</option>
                                        <option>4/1</option>
                                        <option>4/2</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-3">
                                <!-- member 3 -->

                                <p>Member 3</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Roll Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Registration Number *"
                                        value="" />
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select Department
                                        </option>
                                        <option>CSE</option>
                                        <option>ECE</option>
                                        <option>EEE</option>
                                        <option>BBA</option>
                                        <option>LLB</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Current Semester
                                        </option>
                                        <option>1/1</option>
                                        <option>1/2</option>
                                        <option>2/1</option>
                                        <option>2/2</option>
                                        <option>3/1</option>
                                        <option>3/2</option>
                                        <option>4/1</option>
                                        <option>4/2</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>



    <!-- footer section starts  -->

    <section class="footer">
        <div class="credit"> created by <span>Asraf, Majed, Fahim </span> | all rights reserved </div>
    </section>

    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>