<?php get_header(); ?>
<link rel="stylesheet" href="styles.css">
<!-- Home Section -->
<section id="home" class="section">
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
                    <p class="lead">Welcome to NITEL, where innovation meets expertise in the realm of software development. As developers at NITEL, our mission is to push the boundaries of technology and create solutions that redefine the landscape of IT in Malawi and beyond.

                    Crafting Digital Experiences:
                    At NITEL, we are architects of digital experiences. Our team of skilled developers leverages cutting-edge technologies to design and build software applications that captivate, engage, and delight users. From intuitive user interfaces to seamless interactions, we bring ideas to life in the digital realm.

                    Driving Technological Innovation:
                    Innovation is in our DNA. We are not just developers; we are pioneers exploring the uncharted territories of technology. NITEL thrives on creating groundbreaking solutions that address real-world challenges. Whether it's developing scalable platforms, harnessing the power of artificial intelligence, or diving into the realms of blockchain, we are at the forefront of technological advancement.</p>
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
                    <h3>HERE WE NOT HERE</h3>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis deserunt consequatur nesciunt ab ad fuga?</p>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, nisi obcaecati dolorem minus unde sapiente sit magni voluptatum alias corporis quos, veniam molestias commodi, provident fugit dolor incidunt eveniet quidem!</p>    
                <a href="" class="btn bg-secondary text-light">
                    <i class="bi bi-house"></i>
                    READ A WAY LESS
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
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#about">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <!-- Questions end here -->
<?php get_footer(); ?>
<script>
    // Smooth scroll to section when clicking on navigation links
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

</script>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
<?php get_footer(); ?>