<?php
include "read.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="read.php">
    <link rel="stylesheet" href="index,php">
    <link rel="stylesheet" href="edit.php">
    <title>My Page</title>
</head>
<body class="bg-light">

<nav class="navbar navbar-light fixed-top bg-light shadow-sm">
    <div class="container-lg">
        <a class="navbar-brand text-danger fw-bold fs-3" href="#">Tranquillero</a>
        <div class="dropdown">
            <button class="btn btn-secondary btn-danger px-3" type="button" id="dropdownMuneButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bars"></i> 
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#home">Home</a></li>
                <li><a class="dropdown-item" href="#about">About</a></li>
                <li><a class="dropdown-item" href="#services">Services</a></li>
                <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                <li><a class="dropdown-item" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- home section-->
<section class="home py-5" id="home">
    <div class="container-lg">
        <div class="row min-vh-100 align-item-center align-content-center">
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="home-img text-center">
                    <img src="image/love.jpg" class="rounded-circle mw-100"  alt="profile image">
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 border-md-first">
                <div class="home-text"></div>
                <p class="text-muted mb-1 fs-4">Hello I'm</p>
                <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Designer</h1>
                <h2 class="fs-3">Jenamel Tranquillero</h2>
                <p class="mt-4 fs-5 text-muted">“What separates design from art is that design is meant to be... function. -cameron moll”</p>
                <p class="mt-4 fs-5 text-muted">"Do the best you can until you know better. Then, when you know better, do better." -Jenamel</p>
                <a href="#portfolio" class="btn btn-danger px-3 mt-3">My Work</a>
            </div>
        </div>
    </div>
</section>   
<!-- home section end-->

<!--about section start-->
<section class="about py-5" id="about">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">About Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-text">
                    <h3 class="fs-5 mb-1">Work Experience</h3>
                    <p class=" fs-7 mb-1 text-muted">Collates papers and deliver to various department</p>
                    <p class=" fs-7 mb-1 text-muted">Assign to organized and prepare for municipality events and programs</p>
                    <p class=" fs-7 mb-1 text-muted">Encode in the system data for application and permits from various establishment</p>
                    <p class=" fs-7 mb-1 text-muted">Create design concept, decor, programs, and other printable in the event if municipal</p>
                    <h3 class="fs-5 mb-1">Skills</h3>
                    <p class=" fs-7 mb-1 text-muted">Encoding</p>
                    <p class=" fs-7 mb-1 text-muted">Computer Literate</p>
                    <p class=" fs-7 mb-1 text-muted">Can Do Multi-Tasking</p>
                    <p class=" fs-7 mb-1 text-muted">Can work fulltime or overtime</p>
                    <p class=" fs-7 mb-1 text-muted">Easy to adapt in working envorenment</p>
                    <h3 class="fs-5 mb-1">Hobbies</h3>
                    <p class=" fs-7 mb-1 ">Call of Duty</p>
                    <p class=" fs-7 mb-1 ">Mobile Legend</p>
                    <p class=" fs-7 mb-1 ">Reading Books</p>
                    <p class=" fs-7 mb-1 ">Travel</p>
                    <p class=" fs-7 mb-1 ">Party</p>
                </div>
                <div class="row text-center text-uppercase my-3">
                    <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">100%</h4>
                            <p class="text-muted">Goal</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">5%</h4>
                            <p class="text-muted">Achievement</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">10%</h4>
                            <p class="text-muted">Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                    <div class="col-lg-12 d-flex align-items-center">
                        <a href="#" class="btn px-3 btn-danger me-5">Download CV</a>
                        <div class="social-links">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="skill-item mb-4">
                    <h3 class="fs-6">Html</h3>
                    <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">Css</h3>
                    <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">JavaScript</h3>
                    <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <h3 class="fs-6">Bootstrap</h3>
                    <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- service section start -->
<section class="services py-5" id="services">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">What I Do</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                        <h3 class="text-muted fs-5 py-2">Web Development</h3>
                        <img src="image/webdev.jpg" class="mw-100"  >
                        <p class="text-muted">“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for”
                            ― Milton Glaser</p>
                        <p class="text-muted">“SEO is an investment just like a tree that needs effort, patience and time to grow before you can see the result.”
                            ― Dr. Chris Dayagdag</p>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                            <h3 class="text-muted fs-5 py-2">Creative Design</h3>
                            <img src="image/creativeD.jpg" class="mw-100"  >
                            <p class="text-muted">"Have no fear of perfection -- you’ll never reach it." -- Salvador Dali, artist</p>
                            <p class="text-muted">"Every great design begins with an even better story." -- Lorinda Mamo, designer</p>
                            <p class="text-muted">"Design creates culture. Culture shapes values. Values determine the future." -- Robert L. Peters, designer and author</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-item shadow-sm p-4 rounded bg-white">
                            <div class="icon my-3 text-danger fs-2">
                                <i class="fas fa-image"></i>
                            </div>
                                <h3 class="text-muted fs-5 py-2">Photoshop</h3>
                                <img src="image/photoshop.jpg" class="mw-100"  >
                                <p class="text-muted">I don't love Photoshop; I like imperfection. It doesn't mean ugly. I love a girl with a gap between her teeth, versus perfect white veneers. Perfection is just... boring. Perfect is what's natural or real; that is beauty. -Marc Jacobs</p>
                                <p class="text-muted">I always find beauty in things that are odd and imperfect - they are much more interesting. -Marc Jacobs</p>
                         </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->

<!-- portfolio section start-->
<section class="portfolio py-5" id="portfolio">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Latest Work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="image/system.jpeg" class="w-60 img-thumbnail" alt="portfolio item">
                    <h3 class="text-capitalize fs-5 my-2">Our System</h3>
                </div>
            </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="image/mypage.png" class="w-60 img-thumbnail" alt="portfolio item">
                        <h3 class="text-capitalize fs-5 my-2">My Page</h3>
                    </div>
                </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item">
                            <img src="image/myweb.png" class="w-60 img-thumbnail" alt="portfolio item">
                            <h3 class="text-capitalize fs-5 my-2">My Webpage</h3>
                        </div>
                    </div>
        </div>
    </div>
</section>
<!-- portfolio section end-->

<!-- contact section start-->
<section class="contact py-5" id="contact">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Contact Me</h2>
                </div>
            </div>
        </div>
<form action ="read.php" method ="POST">
            <div class="col-md-4">
                <div class="container">
                    <form class="text-start">
				<div class="col-lg-12 mb-3">
                            <label for="email" class="form-label required">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        <div class=" col-lg-12 mb-3">
                            <label for="name" class="form-label required">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>                       
				<div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea type="messaget" name = "message" class="form-control" id="message"></textarea>
               </div>
                                    <!-- Button tigger modal -->
                        <div class="col-lg-12">
                        <button type="submit" name="submit" class="btn btn-danger my-1">Submit</button>
                        </div>
				</form>
                    </form>
                                    <!-- Modal-->
                    <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="feedbackLabel">Modal Title</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section end-->

<!-- footer start-->
<footer class="footer border-top py-4">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <p class="m-0 text-center text-muted">&copy; My Page 2023</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->

    <script src="index.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>