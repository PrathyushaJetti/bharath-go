<?php ;
$meta = [
    'title' => "Book Online Bikes, Cabs, and Auto Rides Nearby at BharathGo.com",
    'description' => "Need a ride? Book bikes, cabs, or autos on BharathGo! Easy to book, affordable prices, and fast rides for your daily travel. Quick, simple, and budget-friendly.",
    'keywords' => "online booking apps,online cars booking,online bike booking,online auto booking,Cabs near me ,Bike ride app,Bike ride booking ,24/7  cabs service near me,How to book a bike taxi ,late-night ride services,Affordable bike and car rides near me,how to book auto online,online taxi near me,Car Rentals India,book cabs online,book taxi online,Cab services,Cab rental,Long Drives cabs,Bikes in online,bike rental near me,online bike on rent,bike rental nearby",
   
    
]; 
include('includes/header.php')

 ?>

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index.php"><img src="assets/images/bharath-go.png" alt="logo"></a>
            </div>
            <p>Fast, affordable, and reliable rides for everyone, anytime and anywhere you need to go.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span> 6303548105<br> 9121485247</li>
                <li>
                    <span>You can find us at:</span>Ground floor 13, Amrutha Ville, opposite Yashoda Hospital Road, Raj Bhavan Rd, Somajiguda, Hyderabad, Telangana 500082
                </li>
                <li><span>Email now:</span>bharathgo.official@gmail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <div class="slider-section">
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/images/Home Page BG.webp" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="assets/img/car-11.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Travel with BharathGo, <br>Fast, Safe, and Easy
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                            BharathGo offers a fast, safe, and easy travel experience.</div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="book-taxi.php" class="default-btn" data-animation="fade-in-bottom"
                                        data-delay="0.9s">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/images/Bharath-banner.webp" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="assets/img/car-11.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from
                                            <br>anywhare today!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                            Everything your taxi business needs is already here! <br>BharatGo made for taxi
                                            service companies!</div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="book-taxi.php" class="default-btn" data-animation="fade-in-bottom"
                                        data-delay="0.9s">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider navigation buttons -->
            <div class="slider-controls">
                <div class="slider-control slider-button-prev"><span><i
                            class="las la-long-arrow-alt-left"></i></span>Prev</div>
                <div class="slider-pagination"></div>
                <div class="slider-control slider-button-next">Next<span><i
                            class="las la-long-arrow-alt-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--/.slider-section-->

    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-img">
                        <img class="about-img1 wow fade-in-left" data-wow-delay="200ms" src="assets/images/TRANSPORT.png"
                            alt="img">
                        <img class="about-img2 wow fade-in-bottom" data-wow-delay="400ms" src="assets/images/cars.png"
                            alt="img">
                        <figure class="round-text"><img src="assets/images/Bharath Go (6) (1).webp" alt="img"></figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-heading mb-40 wow fade-in-right" data-wow-delay="200ms">
                        <h4><span></span>About Our Company</h4>
                        <h2>Feel the difference and Relaxation with BharatGo Taxi Company!</h2>
                        <p>In 2023, Bharath Go introduced Bike-Taxis to India, becoming a leader in this space. With a focus on making travel easier across the country, it has grown steadily. Now, it’s well-known for app-based auto services and is expanding its reach in the cab market and local deliveries with Bharath Go Parcel.</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="about-info wow fade-in-right" data-wow-delay="400ms">
                        
                        <li>
                            <h2><span>Call For Taxi</span><a href="tel:6303548105"> 6303548105</a></h2>
                            <h2><span>Call For Taxi</span><a href="tel:9121485247"> 9121485247</a></h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/.about-section-->

    <section class="service-section bg-grey padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>BharatGo Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                                <div class="service-thumb">
                                    <img src="assets/images/RENTAL.webp" alt="img">
                                    
                                </div>
                                <div class="service-content">
                                    <h3><a href="#">Vehicle Rentals services</a></h3>
                                    <p>Get easy rentals for autos, cabs, and bikes! Quick booking, affordable rates, and reliable rides. Perfect for daily travel needs convenient, safe, and always there when you need it.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="service-thumb">
                                    <img src="assets/images/Ride share.webp" alt="img">
                                    
                                </div>
                                <div class="service-content">
                                    <h3><a href="#">Unified Mobility (Rideshare) </a></h3>
                                    <p>Unified Mobility offers easy rides with autos, cabs, and bike pools. Choose the ride that fits your needs, book quickly, and travel safely. Affordable, reliable, and perfect for everyday journeys.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="service-thumb">
                                    <img src="assets/images/Ride Booking.webp" alt="img">
                                    
                                    <div class="service-car"><img src="assets/img/car-11.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">Ride Booking</a></h3>
                                    <p>Book rides easily with BharathGo! Choose from cabs or bikes for a quick, comfortable trip. Fast booking, affordable rates, and friendly drivers make every ride smooth. Your journey is made easy.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/images/Parcels Sending.webp" alt="img">
                                    
                                </div>
                                <div class="service-content">
                                    <h3><a href="#">BharathGo Local (Parcels sending)</a></h3>
                                    <p>BharathGo Local offers fast and reliable parcel delivery to local areas with easy pickup and drop-off options. Whether you need a package delivered or want a quick ride, our cabs and bikes are here for you.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/images/Subscription &Membership.webp" alt="img">
                                   
                                </div>
                                <div class="service-content">
                                    <h3><a href="#">Subscription and Membership</a></h3>
                                    <p>BharathGo's subscription gives you quick rides at lower prices. With a membership, you save more, avoid extra charges, and get priority service. It’s easy, affordable, and helps you travel smoothly.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/images/Corporate Mobility .webp" alt="img">
                                   
                                </div>
                                <div class="service-content">
                                    <h3><a href="#">Corporate Mobility</a></h3>
                                    <p>BharathGo offers easy and quick rides for offices, helping employees travel safely every day. It saves time and reduces costs, making corporate transport smooth and reliable for businesses and teams.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="booking-section">
        <div class="container">
            <div class="row pos-relative padding">
                <div class="col-lg-4">
                    <div class="booking-car wow fade-in-left" data-wow-delay="200ms"></div>
                </div>
                <div class="col-lg-8">
                    <div class="booking-wrap">
                        <div class="section-heading mb-30">
                            <h4><span></span>Online Booking</h4>
                            <h2 class="white">Book Your Taxi Ride</h2>
                        </div>
                        <form action="book-ride.php" id="book-taxi-ride">
                            <div class="booking-form">
                                <div class="form-field">
                                    <i class="las la-user-tie"></i>
                                    <input type="text" id="full-name" name="full-name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-field">
                                    <i class="las la-envelope-open"></i>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-field">
                                    <i class="las la-tags"></i>
                                    <select name="package-type" id="type" class="niceSelect">
                                        <option value="standard">Standard</option>
                                        <option value="business">Business</option>
                                        <option value="economy">Economy</option>
                                        <option value="vip-spacial">VIP Spacial</option>
                                        <option value="comfort">Comfort</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <i class="las la-user-friends"></i>
                                    <select name="passengers" id="passengers" class="niceSelect">
                                        <option value="1">1 Person</option>
                                        <option value="2">2 Person</option>
                                        <option value="3">3 Person</option>
                                        <option value="4">4 Person</option>
                                        <option value="5">5 Person</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <i class="las la-map-marker"></i>
                                    <input type="text" id="start-dest" name="start-dest" class="form-control"
                                        placeholder="Start Destination" required>
                                </div>
                                <div class="form-field">
                                    <i class="las la-map-marker"></i>
                                    <input type="text" id="end-dest" name="end-dest" class="form-control"
                                        placeholder="End Destination" required>
                                </div>
                                <div class="form-field">
                                    <i class="las la-calendar"></i>
                                    <input type="text" id="ride-date" name="ride-date" class="form-control date-picker"
                                        placeholder="Select Date" required>
                                </div>
                                <div class="form-field">
                                    <i class="las la-clock"></i>
                                    <input type="text" id="ride-time" name="ride-time" class="form-control time-picker"
                                        placeholder="Select Time" required>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit" href="#downloadNow">Book Your Taxi</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form><!-- Booking Form -->
                    </div>
                </div>
            </div>
        </div>
    </section><!--/.booking-section-->

    <section class="pricing-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>Lets Go With Us!</h4>
                <h2>Choose Your Taxi to Ride!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div><!--/.section-heading-->
            <ul class="nav pricing-tab-menu" id="pricing-tab" role="tablist">
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="hybrid-taxi" data-bs-toggle="tab"
                        data-bs-target="#hybrid-taxi-content" type="button" role="tab"
                        aria-controls="hybrid-taxi-content" aria-selected="true"> Process</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="town-taxt" data-bs-toggle="tab" data-bs-target="#town-taxi-content"
                        type="button" role="tab" aria-controls="town-taxi-content" aria-selected="false"> Open the App and Enter Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="limousine-taxi" data-bs-toggle="tab"
                        data-bs-target="#limousine-taxi-content" type="button" role="tab"
                        aria-controls="limousine-taxi-content" aria-selected="false">Confirm and Choose Payment</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="limousine-taxi1" data-bs-toggle="tab"
                        data-bs-target="#limousine-taxi-content1" type="button" role="tab"
                        aria-controls="limousine-taxi-content1" aria-selected="false">Track and Ride</button>
                </li>
            </ul>
            <!--Tab Menu-->
            <div class="tab-content" id="pricing-tab-content">
                <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel"
                    aria-labelledby="hybrid-taxi-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                           <img src="assets/images/Open App & Enter The Detailes.webp">
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                        <img src="assets/images/Confirm And Choose Payment.webp"> 
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                        <img src="assets/images/Track & Ride.webp">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="town-taxi-content" role="tabpanel" aria-labelledby="town-taxi-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 sm-padding">
                        <img src="assets/images/Open App & Enter The Detailes.webp">
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="limousine-taxi-content" role="tabpanel" aria-labelledby="limousine-taxi">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 sm-padding">
                        <img src="assets/images/Confirm And Choose Payment.webp"> 
                        </div>
                       
                    </div>

                </div>
                <div class="tab-pane fade" id="limousine-taxi-content1" role="tabpanel" aria-labelledby="limousine-taxi1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 sm-padding">
                        <img src="assets/images/Track & Ride.webp">
                        </div>
                       
                    </div>

                </div>
            </div><!-- Tab Content -->
        </div>
    </section>
    <!--/.pricing-section-->

    <section class="download-section bd-bottom padding" id="downloadNow">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading wow fade-in-left" data-wow-delay="200ms">
                        <h4><span></span>Online Booking</h4>
                        <h2>Get the BharatGo Mobile app and Start Your Journey!</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and
                            regularly master technologies.</p>
                        <ul class="app-feature">
                            <li>
                                <i><img class="feature-icon" src="assets/img/icon-navigator.svg" alt="icon"></i>
                                <h3>Easy to Search <br> BharatGo Taxi!</h3>
                            </li>
                            <li>
                                <i><img class="feature-icon" src="assets/img/icon-clock.svg" alt="icon"></i>
                                <h3>Quick Pickups To <br> Save Time!</h3>
                            </li>
                            <li>
                                <i><img class="feature-icon" src="assets/img/icon-docs.svg" alt="icon"></i>
                                <h3>Inclusive Rates To<br> Enjoy Ride!</h3>
                            </li>
                        </ul>
                        <div class="download-btn">
                            <a href="#"><img src="assets/img/google-play.svg" alt="PlayStore"></a>
                            <a href="#"><img src="assets/img/app-store.svg" alt="AppStore"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="taxi-holder">
                        <div class="taxi wow fade-in-left" data-wow-delay="300ms"></div>
                        <div class="mockup wow fade-in-bottom" data-wow-delay="400ms"></div>
                        <div class="charecter wow fade-in-right" data-wow-delay="500ms"></div>
                        <img class="location-marker" src="assets/img/location-marker.png" alt="location">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.download-section-->

    <section class="testimonial-section bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading mb-10">
                        <h4><span></span>Customer Testimonial</h4>
                        <h2>BharatGo Passenger Reviews...</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and
                            regularly master technologies.</p>
                    </div>
                    <div class="swiper-outside testi-pagination">
                        <div class="testimonial-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>  I used BharathGo’s parcel service, and it was fantastic! My package was delivered quickly and safely, making it super reliable for urgent deliveries. Highly recommend this service!.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/images/testimonial-neelima.webp" alt="testimonial">
                                            </div>
                                            <div class="author-info">
                                                <h3>Neelima </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>   I booked a BharathGo ride, and it was so easy and affordable. The driver arrived on time, and the journey was smooth. A great option for quick city travel!.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/images/testimonial-priya.webp" alt="testimonial">
                                            </div>
                                            <div class="author-info">
                                                <h3>Priya</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>  I tried BharathGo rentals, and it was perfect for a day out! The rental process was simple, and the bike was in good condition. Great for exploring the city on my own!.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/images/testimonial-anil.webp" alt="testimonial">
                                            </div>
                                            <div class="author-info">
                                                <h3> Anil </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>    Booked a BharathGo bike rental, and I loved it. The process was smooth, and the bike was comfortable. Perfect for short trips and a quick, affordable ride option.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/images/testimonial-sneha.webp" alt="testimonial">
                                            </div>
                                            <div class="author-info">
                                                <h3> Sneha</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>  I used BharathGo’s rideshare service, and it was excellent! The driver was polite, and the trip was quick. A trustworthy and affordable choice for regular commuting.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/images/testimonial-vijay.webp" alt="testimonial">
                                            </div>
                                            <div class="author-info">
                                                <h3> Vijay </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30 wow fade-in-right" data-wow-delay="200ms">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why Ride with BharatGo?</h2>
                            <p class="white">We successfully cope with tasks of varying complexity, provide long-term
                                guarantees and regularly master technologies.</p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="BharatGo-features">
                            <li class="wow fade-in-right" data-wow-delay="300ms">
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>24/7 Support</h3>
                                    <p>Whether you’re a rider needing assistance or a driver with a question, our dedicated support team is available around the clock to ensure a smooth experience for everyone.</p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="400ms">
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Live Tracking</h3>
                                    <p>Safety and transparency are priorities at BharathGo. With live tracking, riders, and drivers can stay updated on each ride’s progress in real-time, providing peace of mind and improved coordination.

                                    </p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="500ms">
                                <div class="feature-icon">
                                    <i class="las la-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Safety First</h3>
                                    <p>Our commitment to safety includes in-app safety features, real-time tracking, and support for both drivers and riders, creating a secure environment every step of the way.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.testimonial-section-->

    <section class="cta-section padding">
        <div class="cta-men wow fade-in-bottom" data-wow-delay="200ms"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new
                    technologies.</p>
                <div class="cta-call">
                    <i class="las la-phone-volume"></i>
                    <p><span>Call For Taxi</span><a href="tel:6303548105"> 6303548105</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>Recent Posts!</h4>
                <h2>News And Insights!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="row grid-post">
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/images/SAFETY TIPS.webp" alt="safety">
                           
                        </div>
                        <div class="post-content-wrap">
                            
                            <div class="post-content">
                                <h3>
                                    <a href="./blogs/safety-tips.php" class="hover">Top 5 Safety Tips for Riders and Passengers Using Bharath Go Bike Taxi </a>
                                </h3>
                                <p>Bike taxis are a short, easy, and reasonably priced manner to get around crowded city areas. It's much less high priced than other modes of transportation and enables you to get through site visitors very quickly. Our primary priority at Bharath Go is safety. Here are the top five protection recommendations that every passengers and riders have to pass with the aid to make sure every ride is happy and secure.</p>
                                <a href="./blogs/safety-tips.php" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/images/one-step-for-all.webp" alt="post">
                            
                        </div>
                        <div class="post-content-wrap">
                           
                            <div class="post-content">
                                <h3>
                                    <a href="./blogs/one-stop-solution-for-all-driver-needs.php">Your One-Stop Solution for All Driver Needs at Bharath Go </a>
                                </h3>
                                <p>In today’s fast-paced world drivers face many challenges, from Managing fuel prices to navigating customers. Bharath Go is aware of these demands and provides a range of contemporary services aimed at making driving more enjoyable for all. Whether you’re an everyday traveller or someone seeking to maximize your travel performance, Bharath Go has you covered. </p>
                                <a href="./blogs/one-stop-solution-for-all-driver-needs.php" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/images/finding-best-types.webp" alt="post">
                            
                        </div>
                        <div class="post-content-wrap">
                            
                            <div class="post-content">
                                <h3>
                                    <a href="./blogs/finding-the-best-taxi option-in-your-budget.php">Finding the Best Taxi Option in Your budget with BharathGo </a>
                                </h3>
                                <p>In today’s busy world, taxis offer a brief and convenient way to get around without the pressure of driving. With alternatives like bike taxis, auto taxis, and car taxis, it could be difficult to locate the proper choice for your needs and finances. BharathGo helps you find an exceptional choice at a nice rate, making it easy to pick out your experience. </p>
                                <a href="./blogs/finding-the-best-taxi option-in-your-budget.php" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.blog-section-->

    <?php include('includes/footer.php');?>

</html>