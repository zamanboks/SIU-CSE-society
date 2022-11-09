<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIU CSE SOCIETY </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="index2.php" class="logo"> <i class="fas fa-chevron-right"></i> SIU CSE SOCIETY </a>

        <nav class="navbar">
		<a href="index2.php">home</a>
            <a href="results.php">Result</a>
            <a href="about.php">about</a>
            <a href="login.php">Login</a>



        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->



    

	<!-- Main Content -->
	<div class="container-fluid" style="margin-top: 200px;">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
                <img src="image/SIU.png" alt="">
				<h4 class="company_title">SIU CSE SOCEITY</h4>
			</div>

			<form  name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form control="" class="form-group">
							<div class="row">

							<input type = "text" id ="user" name  = "user" /> 
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type = "password" id ="pass" name  = "pass" />  
							</div>
							<div class="row">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								
								<label for="remember_me">Remember Me!</label>
							</div>
							<div class="row">
							<input type =  "submit" id = "btn" value = "Login" />  
							</div>
						</form>
					</div>
					
				</div>
			</div>
			</form>

		</div>
	</div>


	<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

<script src="js/script.js"></script>
<!-- footer section ends -->


<!-- custom js file link  -->





</body>
</html>