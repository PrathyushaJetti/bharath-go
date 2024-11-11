<?php ;
$meta = [
    'title' => "Get in Touch - Bharath Go | Customer Support & Services",
    'description' => "For any questions or support, reach out to Bharath here. Just fill out the query form, and we will get back to you as soon as possible. We are here to help you.",
    'keywords' => "BharathGo,Contact us,Reach us,Mobile,Phone Number, Email, Address,Customer Service,Business Inquiries,",
   
    
]; 
include('includes/header.php')

 ?>

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
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
                <a href="index.php"><img src="assets/images/bharath-go.png" alt="logo" /></a>
            </div>
            <p>Fast, affordable, and reliable rides for everyone, anytime and anywhere you need to go.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span> 6303548105</li>
                <li>
                    <span>You can find us at:</span>Ground floor 13, Amrutha Ville, opposite Yashoda Hospital Road, Raj Bhavan Rd, Somajiguda, Hyderabad, Telangana 500082
                </li>
                <li><span>Email now:</span>bharathgo.official@gmail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <div class="map-wrapper pt-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3177.2274750192864!2d78.4530858712452!3d17.424981965209124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97f1145d796f%3A0xcabdc983c88ef0eb!2sASWGroupIndia%20-%20Somajiguda%20Head%20Office!5e1!3m2!1sen!2sin!4v1730786298014!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- /#google-map -->

    <section class="contact-section bd-bottom padding">
        <div class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details-wrap">
                        <div class="contact-title">
                            <h2>Have Any <span>Questions?</span></h2>
                            <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="fas fa-map-marker-alt"></i>Ground floor 13, Amrutha Ville, opposite Yashoda Hospital Road, Raj Bhavan Rd, Somajiguda, Hyderabad, Telangana 500082</li>
                            <li><i class="fas fa-envelope"></i>hello@themeaster.net <br>Yourmail@gmail.com</li>
                            <li><i class="fas fa-phone"></i> 6303548105 <br>
                            9121485247 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="contact-title">
                                <h2>Contact With Us! <span></span></h2>
                            </div>
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Send Massage</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.contact-section-->



    <?php include('includes/footer.php');?>

</html>