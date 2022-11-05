<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

?>
<!-- 1st row  Home-->
<div class="row">

    <div class="col">
        <section class="home" id="home">

            <div class="text-box">

                <h1>Maanzoni</h1>
                <p id="home-para-one">Begin your next adventure by entering Johari Ndogo, our picturesque 4-bedroom guest
                    house
                    in the rolling
                    landscape of Maanzoni Wildlife Estate, where you'll be greeted with incredible views through large windows.
                </p>

                <p>
                    Our thoughtfully designed guest house is the quintessential outdoor retreat, central to many of the
                    adventures
                    found in Maanzoni Wildlife Estate's expansive landscape. Ideal for family fun, couples, friends, nature
                    walks
                    and biking in the conservation area, and other activities for up to 8 guests!</p>

                <br>

                <p id="home-para-two">Johari Ndogo is located on 5 acres of the beautiful Johari House hillside and is
                    privately
                    fenced on half an
                    acre with its own private gate (perfect for dog lovers). You'll have plenty of room to spread out and enjoy
                    the fresh estate air in privacy. Prepare to enjoy the natural outdoors with plenty of wildlife as you go on
                    nature walks, drives, bike rides, or runs throughout the estate.</p>

                <a href="booking-form.php" class="btn btn-primary">Book now!</a>

            </div>

        </section>
    </div>

</div>

<!-- 2nd row, Cottage -->
<div class="row">

    <div class="col">

        <section class="cottage" id="cottage">

            <div class="text-box">

                <h1>The Cottage</h1>

                <p id="cottage-para-one">A fully equipped kitchen and lovely spacious bedrooms.
                    Enjoy your meals together at the dining room table, or take them to the large verandah with a lounge and a
                    bar
                    area for an epic barbecue and drinks.</p>

                <p id="cottage-para-two">After a hike or game drive through Maanzoni Wildlife Estate, retire to the family
                    room
                    for a movie night. This
                    inviting space features a flatscreen TV with streaming access and live TV via YouTube TV and Wi-Fi.</p>

                <p id="cottage-para-three">Maanzoni Estate is a place where residents want to coexist with wildlife and
                    nature,
                    and we tried to capture
                    that in our decor by using classic rustic details from dead acacia for the wood décor and river stones
                    sourced
                    from the area to complement the environment and capture the panoramic views from each window.</p>

                <p id="cottage-para-four">
                    The bedrooms are all en-suite and the include a master bedroom has its own private living room and verandah.
                    There is a double sleeper sofa in the master living room, which is ideal for a family with small children
                    and
                    can be accessed through the master for added privacy and security.
                </p>

                <a href="booking-form.php" class="btn btn-primary">Book now!</a>
            </div>

        </section>

    </div>

</div>

<!-- 3rd row About Us -->
<section class="about-us" id="about-us">
    <div class="container-fluid">

        <div class="row">
            <div class="col ">

                <img src="media/lion-logo.jpg" alt="" class="about-image">
                <p>Hello I am Edward</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <img src="media/lion-logo.jpg" alt="" class="about-image">
                <p>Hello I am Ciku</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>

            </div>

            <div class="col swiper">

                <h3 id="carousel-title">Selection of Images</h3>
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <!-- Use Bootstrap cards here to format the tesstimonials -->

                    <div class="swiper-slide"><img src="media/JoNd (2).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (3).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (4).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (5).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (6).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (7).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (8).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (9).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (10).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (11).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (12).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (13).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (14).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (15).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (16).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (17).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (18).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (19).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (20).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (21).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (22).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (23).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (24).jpg" alt=""></div>
                    <div class="swiper-slide"><img src="media/JoNd (25).jpg" alt=""></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>

            </div>

        </div><a href="booking-form.php" class="btn btn-primary testimonials-button">Book now!</a>

    </div>
</section>

<!-- 4th row Testimonials -->

<section class="testimonials" id="testimonials">
    <div class="row">

        <div class="col swiper">
            <h3 id="carousel-title">Selection of Testimonials</h3>
            <div class="swiper-wrapper testimonial-swiper-wrapper">
                <!-- Slides -->
                <!-- Use Bootstrap cards here to format the testimonials -->

                <div class="swiper-slide testimonial-swiper-slide">
                    <div class="card testimonial-card" style="width: 18rem;">
                        <img src="media/responsive.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Testimonial Example !</h5>
                            <p class="card-text">A brief summary of the testimonial</p>
                            <a href="#" class="btn btn-primary">Link to the full testimonial</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-swiper-slide">
                    <div class="card testimonial-card" style="width: 18rem;">
                        <img src="media/skate 1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Testimonial Example !</h5>
                            <p class="card-text">A brief summary of the testimonial</p>
                            <a href="#" class="btn btn-primary">Link to the full testimonial</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-swiper-slide">
                    <div class="card testimonial-card" style="width: 18rem;">
                        <img src="media/JoNd (3).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Testimonial Example !</h5>
                            <p class="card-text">A brief summary of the testimonial</p>
                            <a href="#" class="btn btn-primary">Link to the full testimonial</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>

        </div>

    </div>

    <div class="row">
       <a href="testimonial-form.php" class="btn btn-primary contact-button">Add Testimonial. </a> 
    </div>
</section>

<!-- 5th row Contact us -->
<section class="contact" id="contact">
    <div class="row ">

        <div class="col">

            <h1 class="text-center">Contact Us</h1>

            <form method="post" action="contact-success.php">

                <div class="d-grid col-6 mx-auto">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>               

                <div class="d-grid col-6 mx-auto">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="contactNumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contactNumber" name="contactNumber" aria-describedby="contactNumberHelp">
                    <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="specialty" class="form-label">What would you like to contact us about?</label>
                  <input type="text" class="form-control" rows="5" id="contactText" name="contactText"> 
                  

                </div>

                <div class="d-grid col-6 mx-auto">
                    <button type="submit" class="btn btn-primary contact-button" name="submit">Contact Us</button>
                </div>
            </form>

        </div>

    </div>

</section>
<?php require_once 'includes/footer.php'; ?>