<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .success {
  background: #D4EDDA;
  color: #40754C;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;
}
    </style>
    <meta charset="utf-8">
    <title>Quote -Vishwa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
        <link rel="web icon" href="img/logo.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<div>


    <!-- Navbar Start -->
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
                        <a href="quote.php" class="nav-item nav-link active">Quote Form</a>
                        <a href="testimonial.html" class="nav-item nav-link">Testimonial</a>
                        <a href="blog.html" class="nav-item nav-link">Blog Grid</a>
                <a href="contact.php" class="nav-item nav-link">GET IN TOUCH</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class=" text-center">
                <h1 class="display-4 text-white">Free Quote</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Request A Free Quote</h1>
                <p class="mb-4"></p>
                <form action="process.php" method="POST">
                    <?php if (isset($_GET['success'])) { ?>
                         <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input name="name" type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-floating">
                                <select name="service" class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                    <option value="Select a Service"> Select a Service</option>
                                    <option value="Education Consultancy">Education Consultancy</option>
                                    <option value="Stamp 1G Application">Stamp 1G Application</option>
                                    <option value="General Work Consultancy">General Work Consultancy</option>
                                    <option value="Critical Skills Work Permit Application">Critical Skills Work Permit Application</option>
                                    <option value="Tourist Visa Application">Tourist Visa Application</option>
                                    <option value="Tax Consultancy">Tax Consultancy</option>
                                    <option value="Medical Insurance">Medical Insurance</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit" name="quote">GET IN TOUCH</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    

    <!-- Footer Start -->
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
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://instagram.com/vishwa_education_consultancy?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram fw-normal"></i></a>
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
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>