<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="content" author="Sayed Ruble">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap Style Sheets CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom Style Sheets -->
    <link rel="stylesheet" href="css/style.css" >

    <title>Sayed Rubel Portfolio Demo</title>
</head>
<body id="home">
    <header>
        <!-- Navbar -->
        <div id="navberId">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top navbar-custom">
                <a href="index.php" class="nabvar-brand text-decoration-none">
                    <img src="img/logo.png" alt=""> <span class="h3 text-uppercase">Sayed Rubel</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarButton"><span class="navbar-toggler-icon"></span></button>
                <div class="navbar-collapse collapse" id="navbarButton">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#header" class="nav-link px-3 text-uppercase active">Home</a></li>
                        <li class="nav-item"><a href="#welcome" class="nav-link px-3 text-uppercase">About</a></li>
                        <li class="nav-item"><a href="#whatDo" class="nav-link px-3 text-uppercase">Services</a></li>
                        <li class="nav-item"><a href="#projects" class="nav-link px-3 text-uppercase">Projects</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link px-3 text-uppercase">Contact</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-3 text-uppercase btn btn-primary" data-toggle="modal" data-target="#signinModal">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <!-- Section: Header Image -->
            <div id="header">
                <div class="header-inner">
                    <div class="container header-size">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-uppercase text-warning">Introduction</p>
                                <h6 class="text-uppercase text-white">Hello, my name is md. abu sayed rubel</h6>
                                <h2 class="text-uppercase text-warning">I'm a prog rammer</h2>
                                <button class="btn btn-light px-4 rounded-pill">my work</button>
                                <button class="btn btn-primary px-4 my-2 rounded-pill">Hire me</button>
                            </div>
                            <div class="col-6">
                                <div>
                                    <img src="img/asr.jpg" class="img-fluid float-right" alt="Sayed Rubel Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Welcome -->
        <section id="welcome" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 m-0 text-center">
                        <p class="text-primary m-0">About Me</p>
                        <h1 class="text-dark text-uppercase">welcome to my website</h1>
                        <p class="pt-5 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi blanditiis perspiciatis repudiandae hic reiciendis, molestias nostrum esse ipsum, optio consectetur aliquid aut distinctio exercitationem labore. Temporibus quae doloribus maiores sunt qui sit natus amet velit sint molestias rerum sed distinctio perferendis dolorum suscipit dolor porro, ex accusamus consequuntur veniam deleniti veritatis numquam eius! Architecto inventore quaerat et error! Debitis velit facilis minus libero culpa nulla beatae, harum labore maxime ea quis quos quod distinctio numquam tempora aliquam, iusto sapiente rem id eum temporibus dolore ipsa. Ea, expedita explicabo ut nobis illum rem asperiores vero architecto suscipit totam laboriosam a accusamus.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase ">Web Design</p>
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase">php development</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped" style="width: 85%">85%</div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase">SEO</p>
                        <div class="progress">
                            <div class="progress-bar bg-dark progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase">Boostrap</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 95%">95%</div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase">Javascript</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped" style="width: 80%">80%</div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <p class="m-0 text-uppercase">Wordpress</p>
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped" style="width: 99%">99%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: What I do-->
        <section id="whatDo" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 m-0 text-center">
                        <p class="text-primary m-0">My Services</p>
                        <h1 class="text-white text-uppercase">What I do</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="fas fa-list-ul text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">professional code</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="far fa-lightbulb text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">creative ideas</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="far fa-clone text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">seo & marketting</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="far fa-heart text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">user friendly</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="fas fa-magic text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">web development</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center py-5 text-white custom-card">
                            <div class="card-body">
                                <i class="fas fa-sliders-h text-warning custom-icon"></i>
                                <h5 class="card-title text-uppercase py-3">portfolio options</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Projects -->
        <section id="projects" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 m-0 text-center">
                        <p class="text-primary m-0">View All</p>
                        <h1 class="text-dark text-uppercase">My projects</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g1.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g2.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g3.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g4.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g5.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g6.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g7.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g8.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/g9.jpg" class="card-img img-fluid" alt="Projects Image">
                            <div class="card-img-overlay d-flex flex-column">
                                <button class="btn-dark btn-block mt-auto projects-button">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section: Counter-->
        <section id="counter" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 text-center">
                        <i class="far fa-lightbulb text-warning custom-icon"></i>
                        <h3 class="text-white py-3">48</h3>
                        <h5 class="text-white">Projects Done</h5>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <i class="far fa-heart text-warning custom-icon"></i>
                        <h3 class="text-white py-3">42</h3>
                        <h5 class="text-white">Satisfied Clients</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <i class="fas fa-magic text-warning custom-icon"></i>
                        <h3 class="text-white py-3">56</h3>
                        <h5 class="text-white">Awards</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <i class="fas fa-grin-alt text-warning custom-icon"></i>
                        <h3 class="text-white py-3">78</h3>
                        <h5 class="text-white">Happy Clients</>
                    </div>
                </div>
            </div>
        </section>

        <!--Section: Contact-->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 m-0 text-center">
                        <p class="text-primary m-0">Find Me</p>
                        <h1 class="text-white text-uppercase">Contact me now</h1>
                    </div>
                </div>
                <form class="text-center pt-4">
                    <div class="form-row">
                        <div class="col-md-6 col-12">
                            <input type="text" class="form-control bg-transparent mb-2" placeholder="Enter Your Name" required>
                            <input type="text" class="form-control bg-transparent mb-2" placeholder="Enter Your Email">
                            <input type="text" class="form-control bg-transparent mb-2" placeholder="Enter Your Phone">
                        </div>
                        <div class="col-md-6 col-12">
                            <textarea class="form-control bg-transparent h-100" placeholder="Enter Your Message.."></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary mt-3">
                </form>
                <div class="row py-5">
                    <div class="col-12 col-md-4 text-center">
                        <i class="fas fa-map-marked-alt text-warning custom-icon"></i>
                        <p class="text-white pt-2">Address<br>Tejgaon, Dhaka-1215</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <i class="far fa-envelope text-warning custom-icon"></i>
                        <p class="text-white pt-2">Email<br>sayedrubel13@gmail.com</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <i class="fas fa-mobile-alt text-warning custom-icon"></i>
                        <p class="text-white pt-2">Phone<br>01515263625</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Area -->
    <footer class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-12 mb-2">
                    &copy; <span id="year"></span> all rights reserved by md. abu sayed rubel
                </div>
                <div class="col-md-6 col-12">
                    <i class="fab fa-facebook-f text-secondary p-2 border border-secondary rounded-circle px-3"></i>
                    <i class="fab fa-twitter text-secondary p-2 border border-secondary rounded-circle px-3"></i>
                    <i class="fab fa-google-plus-g text-secondary p-2 border border-secondary rounded-circle px-3"></i>
                    <i class="fab fa-linkedin-in text-secondary p-2 border border-secondary rounded-circle px-3"></i>
                </div>
            </div>
            <div id="upper">
				<i class="fas fa-arrow-alt-circle-up"></i>
			</div>
        </div>
    </footer>

    <!--Modals: Singin-->
    <div class="modal" id="signinModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Singin Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>
                        <button type="submit" name="signin" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="lead">Not register yet, please register - <span class="badge badge-secondary"><a href="registration.php" class="text-decoration-none text-white">Registration</a></span></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
        //Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        // Init Scrollspy
        $('body').scrollspy({ target:'#navberId'});

        // Smooth Scrolling
        $("#navberId a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
        
            const hash = this.hash;
        
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function () {
            
              window.location.hash = hash;
            });
        }
        });


        /* ==== Upper Button Scroll Start ===== */
        $(window).scroll(function(){
            var x = $(window).scrollTop();
            if(x >1000){
                $('#upper').fadeIn(1000);
            }else{
                $('#upper').fadeOut(1000);
            }
            
        });
        $('#upper').click(function(){
            $('html').animate({scrollTop: 0},2000);
        });
    </script>

</body>
</html>