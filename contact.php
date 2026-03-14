<?php
include 'head.php';
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Contact Us</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="quote-form-container">

            <div class="row g-0">

              <!-- LEFT CONTACT INFO PANEL -->
              <div class="col-lg-6">

                <div class="quote-info">

                  <div class="quote-content">

                    <h3>Get in Touch with Ngelechi</h3>

                    <p>
                      Have a question about our services, a potential partnership, or a project
                      you would like to discuss? Our team is ready to assist you.
                      Send us a message and we will respond as soon as possible.
                    </p>

                    <div class="contact-items">

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-icon">
                          <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Office Address</h4>
                          <p>2500 Pungwa Street, Riverside, Kitwe, Zambia</p>
                        </div>
                      </div>

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="250">
                        <div class="contact-icon">
                          <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Call Us</h4>
                          <p>
                            <i class="bi bi-phone d-flex align-items-center ms-4">
                              <span>+260 978 265 000</span>
                            </i>
                            <i class="bi bi-phone d-flex align-items-center ms-4">
                              <span>+260 968 525 857</span>
                            </i>
                          </p>
                        </div>
                      </div>

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="300">
                        <div class="contact-icon">
                          <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Email</h4>
                          <p>
                            <i class="bi bi-envelope d-flex align-items-center">
                              <a href="mailto:ngelechicompanylimited@gmail.com" class="text-light">
                                ngelechicompanylimited@gmail.com
                              </a>
                            </i>

                            <i class="bi bi-envelope d-flex align-items-center ms-4">
                              <a href="mailto:ngelechicompanylimted@yahoo.com" class="text-light">
                                ngelechicompanylimted@yahoo.com
                              </a>
                            </i>
                          </p>
                        </div>
                      </div>

                    </div>

                    <div class="trust-badges mt-3">

                      <div class="trust-badge">
                        <i class="bi bi-clock"></i>
                        <span>Response Within 24–48 Hours</span>
                      </div>

                      <div class="trust-badge">
                        <i class="bi bi-shield-check"></i>
                        <span>Professional Support</span>
                      </div>

                    </div>

                  </div>

                </div>

              </div>


              <!-- RIGHT FORM PANEL -->
              <div class="col-lg-6">

                <div class="quote-form-wrapper">

                  <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-left" data-aos-delay="200">

                    <div class="form-header">
                      <h4>Send Us a Message</h4>
                      <p>Fill out the form below and our team will respond shortly.</p>
                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                      </div>

                    </div>

                    <div class="form-group mt-3">
                      <input type="text" name="phone" class="form-control" placeholder="Phone Number (Optional)">
                    </div>

                    <div class="form-group mt-3">
                      <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>

                    <div class="form-group mt-3">
                      <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="loading">Loading</div>
                    <div class="error-message"></div>

                    <div class="sent-message">
                      Your message has been sent successfully. We will get back to you soon.
                    </div>

                    <div class="text-center mt-3">
                      <button type="submit">Send Message</button>
                    </div>

                  </form>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</main>

<?php
include 'foot.php';
?>