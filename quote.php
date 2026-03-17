<?php
include 'head.php';
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Request a Quote</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Quote</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Quote Section -->
  <section id="quote" class="quote section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="quote-form-container">

            <div class="row g-0">

              <!-- Left Info Panel -->
              <div class="col-lg-6">

                <div class="quote-info">

                  <div class="quote-content">

                    <h3>Start Your Project With Ngelechi</h3>

                    <p>
                      At Ngelechi, we provide professional solutions across construction,
                      infrastructure development, mining support, water engineering, and
                      corporate branding. Request a quote today and our team will review
                      your requirements and provide a detailed response.
                    </p>

                    <div class="contact-items">

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-icon">
                          <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Call Us</h4>
                          <p> <i class="bi bi-phone d-flex align-items-center ms-4"><span>+260 978 265 000</span></i>
                            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+260 968 525 857</span></i>
                          </p>
                        </div>
                      </div>

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="250">
                        <div class="contact-icon">
                          <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Email</h4>
                          <p> <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:sales@ngelechi.com" class="text-light">sales@ngelechi.com</a></i>
                          <p> <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:ngelechicompanylimited@gmail.com" class="text-light">ngelechicompanylimited@gmail.com</a></i>
                            <i class="bi bi-envelope d-flex align-items-center ms-4"><a href="mailto:ngelechicompanylimted@yahoo.com" class="text-light">ngelechicompanylimted@yahoo.com</a></i>
                          </p>
                        </div>
                      </div>

                      <div class="contact-item" data-aos="fade-right" data-aos-delay="300">
                        <div class="contact-icon">
                          <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-details">
                          <h4>Response Time</h4>
                          <p>Within 24–48 hours</p>
                        </div>
                      </div>

                    </div>

                    <div class="trust-badges" data-aos="fade-right" data-aos-delay="350">

                      <div class="trust-badge">
                        <i class="bi bi-shield-check"></i>
                        <span>Quality Engineering Standards</span>
                      </div>

                      <div class="trust-badge">
                        <i class="bi bi-award"></i>
                        <span>Professional Project Delivery</span>
                      </div>

                    </div>

                  </div>
                </div>

              </div>

              <!-- Right Form Panel -->
              <div class="col-lg-6">

                <div class="quote-form-wrapper">

                  <form action="forms/quote.php" method="post" class="php-email-form" data-aos="fade-left" data-aos-delay="200">

                    <div class="form-header">
                      <h4>Request Your Quote</h4>
                      <p>Fill out the form below and our team will contact you with further details.</p>
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

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="service" class="form-control" required>

                            <option value="">Select Service</option>

                            <option value="construction">Construction & Infrastructure</option>

                            <option value="mining">Mining Consulting & Equipment Supply</option>

                            <option value="water">Water Engineering Solutions</option>

                            <option value="branding">Branding & Graphic Design</option>

                            <option value="other">Other Services</option>

                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="timeline" class="form-control">

                            <option value="">Project Timeline</option>

                            <option value="asap">ASAP</option>

                            <option value="1-3months">1 – 3 Months</option>

                            <option value="3-6months">3 – 6 Months</option>

                            <option value="6months">6+ Months</option>

                            <option value="planning">Still Planning</option>

                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="budget" class="form-control" placeholder="Estimated Budget (Optional)">
                        </div>
                      </div>

                    </div>

                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your project, requirements, or any details that will help us understand your needs..." required></textarea>
                    </div>

                    <div class="loading">Loading</div>

                    <div class="error-message"></div>

                    <div class="sent-message">
                      Your request has been submitted successfully. Our team will contact you soon.
                    </div>

                    <div class="text-center">
                      <button type="submit">Submit Quote Request</button>
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