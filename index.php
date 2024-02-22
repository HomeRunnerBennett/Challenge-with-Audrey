<?php get_header(); ?>
<link rel="stylesheet" href="styles.css">
    <!-- Slider Starts here -->
  <section class="align-items-center justify-content-between">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item active">
                    <img src="img/4.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/5.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/4.png" class="d-block w-100 img-fluid" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    </section>
    <!-- slider ends here -->
    <!-- Home Section -->
    <section id="news" class="section">
        <div class="container">
            <h1>Welcome to Madolo a Nitel</h1>
            <p>Your go-to source for IT services.</p>
        </div>
        <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
    </section>
    <!-- Showcase Area -->
    <section id="Home" class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div><h1>Become A <span class="text-warning">Developer</span></h1>
                <p class="lead my-4">
                NITEL is at the forefront of technological innovation. As a software developer, 
                you will have the opportunity to contribute to groundbreaking projects that shape 
                the future of the IT industry. The culture of innovation here is not just a buzzword 
                but a daily commitment to pushing boundaries and creating solutions that make a real
                impact.
                </p>
                <button class="btn btn-primary btn-lg">OPEN SESAME</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/1.png" alt="">
            </div>
        </div>
    </section>
    <!-- Showcase Area ends here -->
    <!-- Newsletter Section starts -->
    <section class="bg-primary text-light p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">
                    Sign Up For Our Newsletter
                </h3>
                <div class="input-group pt-3 news-input">
                    <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn bg-dark btn-lg text-light" type="button" id="button-addon2">Sign</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section ends -->
    <!-- Boxes Start Here -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">                            
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Takulandirani
                            </h3>
                            <p class="card-text">
                                I really need you, i really need your love right 
                                now i am getting hard, i am not gonna last
                            </p>
                            <a href="bencapital.shop" class="btn bg-primary text-light">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-danger text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">                            
                                <i class="bi bi-phone"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Yimbani
                            </h3>
                            <p class="card-text">
                                I really need you, i really need your love right 
                                now i am getting hard, i am not gonna last
                            </p>
                            <a href="bencapital.shop" class="btn bg-primary text-light">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">                            
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Dzukani
                            </h3>
                            <p class="card-text">
                                I really need you, i really need your love right 
                                now i am getting hard, i am not gonna last
                            </p>
                            <a href="bencapital.shop" class="btn bg-primary text-light">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Boxes End Here -->
    <!-- Learn More -->
    <section id="news" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/2.png" alt="" class="img-fluid">
                </div>
                <div class="col-md">
                    <h3>What We Do</h3>
                <p class="">Collaborative Solutions for Success:
                    Our collaborative approach sets us apart. We believe in the power of teamwork and collective intelligence. At NITEL, developers collaborate seamlessly to create solutions that transcend individual capabilities. The synergy of diverse minds working together results in robust, efficient, and scalable software applications.

                    Agile Development for Rapid Results:
                    Adaptability is key in the fast-paced world of technology. NITEL embraces agile development methodologies, ensuring that we can respond swiftly to evolving requirements and deliver results in a timely manner. Our agile mindset allows us to iterate, innovate, and consistently exceed expectations.

                    Empowering Malawi Through Technology:
                    Beyond coding, our developers are committed to making a positive impact on our local community. Through technology-driven initiatives, we aim to empower Malawi by providing solutions that address societal challenges, enhance connectivity, and contribute to the overall development of the nation.

                    Join us on this exciting journey of exploration, innovation, and collaboration. At NITEL, we don't just write code; we shape the future of technology.
                    </p>    
                                    
                    <a href="" class="btn bg-primary text-light">
                    <i class="bi bi-people"></i>
                    READ A LOT MORE
                </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Learn More -->
    <!-- Another one -->
    <section id="about" class="p-5 bg-secondary">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md text-light">
                    <h3>Who We Are</h3>
                    <p class="lead">Welcome to NITEL, where innovation meets expertise in the realm of software development. As developers at NITEL, our mission is to push the boundaries of technology and create solutions that redefine the landscape of IT in Malawi and beyond.

                        Crafting Digital Experiences:
                        At NITEL, we are architects of digital experiences. Our team of skilled developers leverages cutting-edge technologies to design and build software applications that captivate, engage, and delight users. From intuitive user interfaces to seamless interactions, we bring ideas to life in the digital realm.

                        Driving Technological Innovation:
                        Innovation is in our DNA. We are not just developers; we are pioneers exploring the uncharted territories of technology. NITEL thrives on creating groundbreaking solutions that address real-world challenges. Whether it's developing scalable platforms, harnessing the power of artificial intelligence, or diving into the realms of blockchain, we are at the forefront of technological advancement.</p>
                    <a href="" class="btn bg-secondary text-light">
                    <i class="bi bi-house"></i>
                    READ WAY LESS
                </a>
                </div>
                <div class="col-md">
                    <img src="img/3.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Another one ends here -->
    <!-- Questions section -->
    <section id="about" class="p-5">
        <div class="container text-center">
            <h2 class="mb-4">About the Team</h2>
            <div class="accordion accordion-flush" id="about">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Revolutionizing Connectivity
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">NITEL has been at the forefront of revolutionizing connectivity in Malawi. Through strategic infrastructure development and the deployment of cutting-edge networking solutions, we have enhanced digital connectivity across the nation. From urban centers to remote areas, our commitment to bridging the digital divide has empowered communities and businesses alike.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Empowering Local Businesses
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">Our impact goes beyond technology; it extends to the heart of local businesses. NITEL's software solutions have empowered businesses across various sectors, providing them with the tools needed to thrive in the digital age. From streamlined operations to innovative customer engagement platforms, our contributions have catalyzed growth and efficiency.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Innovative Solutions for Malawi's Challenges
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">NITEL's commitment to innovation is evident in the solutions we've crafted to address Malawi's unique challenges. From agricultural technology to healthcare solutions, our team of developers has harnessed the power of technology to create bespoke solutions that have a meaningful impact on the nation's development.</div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <!-- Questions end here -->
<?php get_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
<?php get_footer(); ?>