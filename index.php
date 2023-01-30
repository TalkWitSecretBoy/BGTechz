<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGTechz</title>
    <!-- Bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome css  -->
    <link rel="stylesheet" href="css/font.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Start Navigation code line from here-->
   <?php
    include('includefiles/header.php');
   ?>
    <!-- End Navigation code line from here  -->
    <!-- Start header section from here  -->
    <header class="jumbotron  custom">
        <div class="businessPlan d-flex justify-content-center align-items-center flex-column text-center  ">
            <h1>Welcome to BG Techz</h1>
            <p>This is one of the most comprehensive sites on the web for entrepreneurs and growing businesses.
                BGTechz.com features articles, advice, forms, agreements, and entrepreneur profiles covering startup
                topics, M&A, venture capital, angel financing, sales and marketing, careers, and more. The site offers
                thousands of articles written by experts from many different fields.</p>
        </div>
        <div class="btn_button">
            <button type="button" class="btn btn-success">Login</button>
            <button type="button" class="btn btn-danger">Sign Up</button>
        </div>
    </header>
    <!-- End header section here  -->


    <!-- Start Services section from here  -->
    <div class="container borderEdit">
        <div class="jumbotron my-5">
            <h1 class="text-center">BG Techz Services</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsa reprehenderit veniam totam recusandae
                fugit possimus illum modi eos, non quidem velit sunt maiores voluptates inventore rerum eum minima ut
                dolorum, nesciunt deleniti quo, est quae laboriosam. Distinctio reiciendis explicabo blanditiis
                asperiores molestias soluta provident, earum itaque quos tenetur alias amet nihil assumenda. Facere,
                saepe.</p>
        </div>
    </div>
    <!-- End Services section from here  -->
    <!-- Start our service section from here  -->
    <div class="container text-center mt-4 borderEdit">
        <h1>Our Services</h1>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success my-4"></i></a>
                <h4>Electronic Applicances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa-solid fa-music fa-8x text-danger my-4"></i></a>
                <h4>Music</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa-solid fa-face-smile fa-8x text-#fd7e14 my-4"></i></a>
                <h4>Smile</h4>
            </div>

        </div>
    </div>
    <!-- End our service section from here  -->

    <!-- Start Registration Form from here  -->
       <?php
       include("UserRegistration.php");
       ?>
    <!-- End Registration Form from here  -->

    <!-- Start Happy Customer  -->
       <div class="happy_customer_responsive">
          <div class="container">
            <h1 class="text-center text-white">Happy Customer</h1>
            <div class="row mt-4">

                <div class="col-lg-3 col-sm-6">
                   <div class="card shadow-lg mb-2 image_responsive">
                 <div class="card-body  text-center">
                    <img src="img/avter/person.jpg" alt="image erorr">
                    <h4>Bikesh</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis illum est?</p>
                 </div>
                   </div>
                </div>
                    
                
                <div class="col-lg-3 col-sm-6">
                   <div class="card shadow-lg mb-2 image_responsive">
                 <div class="card-body  text-center">
                    <img src="img/avter/person1.jpg" alt="image erorr">
                    <h4>Dharmendra</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis illum est?</p>
                 </div>
                   </div>
                </div>

                
                <div class="col-lg-3 col-sm-6">
                   <div class="card shadow-lg mb-2 image_responsive">
                 <div class="card-body  text-center">
                    <img src="img/avter/person2.jpg" alt="image erorr">
                    <h4>Happy</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis illum est?</p>
                 </div>
                   </div>
                </div>

                
                <div class="col-lg-3 col-sm-6">
                   <div class="card shadow-lg mb-2 image_responsive">
                 <div class="card-body text-center">
                    <img src="img/avter/person3.jpg" alt="image erorr">
                    <h4>Tauship</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis illum est?</p>
                 </div>
                   </div>
                </div>

            </div>
          </div>
       </div>
    <!-- End Happy Customer  -->

          <!-- start contact form from here  -->
           <div class="container">
               <div class="row">
                   <!-- 1st column   -->
              <?php include('contactform.php');?>
                     <!-- end 1st column  -->
                     <!-- start  2nd column  -->
                    <div class="col-md-4 mt-4 text-center" id="Details">
                      <strong>Headquarter:</strong>
                      <br>
                       BG Techz Pvt. Ltd.
                       <br>
                       Koteshwor-433566
                       <br>
                       Phone: 03234546
                       <br>
                       <a href="www.bgtechz.com" target="_blank">www.bgtechz.com</a>
                        <br><br>
                        <strong>Branch:</strong>
                      <br>
                       BG Techz Pvt. Ltd.
                       <br>
                       Koteshwor-433566
                       <br>
                       Phone: 03234546
                       <br>
                       <a href="www.bgtechz.com" target="_blank">www.bgtechz.com</a>
                    </div>
               <!-- end  2nd column  -->
                 </div>
                    </div>
          <!-- end contact form from here  -->

             <!-- start footer section from this line  -->
               <?php 
                include('includefiles/footer.php');
               ?>
              <!-- end footer section from this line  -->
    <!-- Javascript Section Start From Here  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- font-awesome section start from here   -->
    <script src="js/font.min.js"></script>
    <!-- query Section Start From Here  -->
    <script src="js/jquery.min.js"></script>
    <!-- Js popper section start from here  -->
    <script src="js/popper.min.js"></script>


</body>

</html>