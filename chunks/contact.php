<?php include('./backend/contactForm.php') ?>
<section class="mh-footer" id="mh-contact">
            <div class="map-image image-bg">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Contact Me</h3>
                        </div>
                        <div class="col-sm-12 mh-footer-address">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <div class="each-icon">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Address</h4>
                                            <address>
                                                Madartek, Bashabo, Shabujbag, Dhaka-1214, Bangladesh.
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        <div class="each-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Email</h4>
                                            <a href="mailto:hridoy.ewu16@email.com">hridoy.ewu16@gmail.com</a><br>
                                            <a href="mailto:alaminislamhridoy@email.com">alaminislamhridoy@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <div class="each-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="each-info">
                                            <h4>Phone</h4>
                                            <a href="callto:+8801907075935">+880 1521 326125</a><br>
                                            <a href="callto:+8801677472329">+880 1677 472329</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 
                        ====================
                            Contact Form
                        ====================
                         -->
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <form id="contactForm" class="single-form quate-form wow fadeInUp" method="POST">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input name="fname" class="contact-name form-control" id="name" type="text" pattern="([a-zA-Z]([\w -]*[a-zA-Z])?){3,30}" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input name="lname" class="contact-email form-control" id="L_name" type="text" pattern="([a-zA-Z]([\w -]*[a-zA-Z])?){3,30}" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="message" class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="btn-form col-sm-12">
                                        <button type="submit" class="btn btn-fill btn-block" name="submit" id="form-submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>