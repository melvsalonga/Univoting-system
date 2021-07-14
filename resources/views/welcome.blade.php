<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UniVote</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        <!-- style for loading animation -->
<!-- <style>
#loading {
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  
  background-color: #bababa;
  z-index: 99;
}

#loading-image {
  z-index: 100;
}

</style> -->
    </head>
    <body id="page-top" style="background-color: #e6e6fa;">

    <!-- loading animation until the page load (Masayadong mabilis ang loading sa local host kaya di bagay) -->

    <!-- <div id="loading">
        <img id="loading-image" src="/assets/img/Preloader_6.gif" alt="Loading..." />
    </div>   -->

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container" data-aos="fade-right">
                <a class="navbar-brand" href="#page-top" ><img src="assets/img/UNIVOTE-LOGO.png" style="width:80px;height:80px;" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" data-aos="fade-left">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services" data-aos="fade-left">Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about" data-aos="fade-left">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact" data-aos="fade-left">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('register')}}" data-aos="fade-left">Vote Now</a></li>
                        
                        <li class="nav-item">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 sm:block">
                        @auth 
                        <a class="nav-link" href="{{route('home')}}" data-aos="fade-left">Home</a>
                        @else
                        <a class="nav-link" href="{{route('login')}}" data-aos="fade-left">LogIn</a>
                        @endauth
                        
                    </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" data-aos="fade-right">Your Vote, Your Voice</div>
                <div class="masthead-heading text-uppercase" data-aos="fade-right">Let's Your Voice Be Heard</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{route('register')}}" data-aos="fade-left">Vote Now</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container" >
                <div class="text-center" >
                    <h2 class="section-heading text-uppercase">How It's Work</h2>
                </div>
                <div class="row text-center"data-aos="fade-down">
                    <div class="col-md-4" >
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="far fa-address-card fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" >Register</h4>
                        <p class="text-muted">A user must register or login an account to vote.</p>
                    </div>
                    <div class="col-md-4" >
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="far fas fa-vote-yea fa-stack-1x fa-inverse"></i> <i class="fas fa-vote-yea"></i>
                        </span>
                        <h4 class="my-3">Vote</h4>
                        <p class="text-muted">Pick your desired candidate and submit your vote. Please take note that you can only vote once.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-poll-h fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Result</h4>
                        <p class="text-muted">After voting, you can view the latest result in the homepage.</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" >About</h2>
                </div>
                <div data-aos="fade-down">
                <iframe width="100%" height="550" src="https://www.youtube.com/embed/PaxVCsnox_4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
        </section>
    
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; UniVote 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- AOT -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
             AOS.init();
        </script>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<!-- loading animation until the page load (Masayadong mabilis ang loading sa local host kaya di bagay) --> 
        <!-- <script>
        $(window).load(function() {
            $('#loading').hide();
        });
        </script> -->

    </body>
</html>
