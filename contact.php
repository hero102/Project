<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <title>Get In Touch-Vishwa </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
         <link rel="web icon" href="img/logo.png">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<link
  href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
  rel="stylesheet"
/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="login.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
           <img src="img/logo.png" alt="logo" class="logo" height="220px" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link ">WHY VISHWA</a>
                <a href="service.html" class="nav-item nav-link">OUR SERVICES</a>
                        <!-- <a href="feature.html" class="nav-item nav-link">Features</a> -->
                        <a href="quote.php" class="nav-item nav-link">Quote Form</a>
                        <a href="testimonial.html" class="nav-item nav-link">Testimonial</a>
                        <a href="blog.html" class="nav-item nav-link">Blog Grid</a>
                <a href="contact.php" class="nav-item nav-link active">GET IN TOUCH</a>
            </div>
        </div>
    </nav>
    <div class="container">
      <span class="big-circle"></span>
     
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          Welcome to our Vishwa Education Consulting Services!
Are you a student looking to pursue post-graduate programs in Ireland and the UK? We are here to guide and assist you in making informed decisions about your educational journey. Our team of experienced education consultants is dedicated to helping you navigate the application process, choose the right universities, and make the most of your academic pursuits.

          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
             <p><br>Mumbai,Maharshtra</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
             <p><br>Vishwaeducation@hotmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
            <p><br>8668847952</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/vishwaeducationconsultancy">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://wa.me/353892554821">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="https://www.instagram.com/vishwa_education_consultancy/?igshid=OGQ5ZDc2ODk2ZA%3D%3D">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/@VISHWA-EDUCATION">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
         

          <form action="formprocess.php" method="POST">
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="phone">Mobile No</label>
              <span>Mobile No</span>
            </div>
            <div class="input-container">
              <input type="text" name="service" class="input" />
              <label for="service">Interested service :</label>
              <span>Interested service</span>
            </div>
            <div class="inputcontainer" name="branch" style="display:flex;">
              <label for="branch" style="color:white;">Interested course :</label>
              <select name="branch" id="branch">
                <option>--Select--</option>
                <option value="PhD">PhD</option>
                <option value="Masters">Masters</option>
                <option value="UG">Udergraduate</option>
                <option value="Diploma">Diploma</option>
                <option value="PG diploma">post graduate diploma</option>
                <option value="others">other</option>
              </select>
            </div>
            <div class="input-container">
              <input type="text" name="field" class="input" />
              <label for="field">Interested Field :</label>
              <span>Interested Field </span>
            </div>
            <div class="input-container">
              <input type="text" name="country" class="input" />
              <label for="country">Interested Country :</label>
              <span>Interested Country </span>
            </div>
            <button class="btnn btn-primary w-100 h-100" type="submit" name="send">GET IN TOUCH</button>
          </form>
        </div>
      </div>
    </div>
   <!-- Footer Starts-->
   <div class="container-fluid text-secondary p-5">
        <div class="row g-5">
            <div class="col-12 text-center">
                <h1 class="display-5 mb-4">-----Where We Are-----</h1>
                <img src="img/india.png" class="mx-auto" style="max-width: 600px;" height="80%" width="100%">
                <h3>Mumbai | Pune | Nagpur | Satara | Bengluru | Chennai<br>Delhi | Varanasi | Calcutta | Hyderabad </h3>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.html">Home</a>
                    <a class="text-secondary mb-2" href="about.html">Why Vishwa</a>
                    <a class="text-secondary mb-2" href="service.html">Our Services</a>
                    <a class="text-secondary mb-2" href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-envelope-open  me-2"></i>vishwaeducation@hotmail.com</p>
                <p class="mb-0"><i class="bi bi-telephone  me-2"></i>8668847952</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://instagram.com/vishwa_education_consultancy?igshid=MzRlODBiNWFlZA==" ><i class="fab fa-instagram fw-normal "></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/vishwaeducationconsultancy"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://wa.me/353892554821"><i class="fab fa-whatsapp fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.youtube.com/@VISHWA-EDUCATION"><i class="fab fa-youtube fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.youtube.com/@VISHWA-EDUCATION"><i class="fab fa-linkedin fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; Vishwa Education Consultancy 2023
    </div>
   <!-- Footer Ends-->
 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="app.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

