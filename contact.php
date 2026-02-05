<?php require 'head.php'; ?>
<main class="main">
  <section class="section contact-section py-5">
    <div class="container" data-aos="fade-up">
      <div class="section-header text-center mb-5">
        <h2 class="fw-bold" style="letter-spacing:1px;">Contact Us</h2>
        <p class="lead" style="color:#3a3a3a;">We'd love to hear from you! Reach out for project inquiries, partnership opportunities, or any questions about our services.</p>
      </div>
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="contact-info-box p-4 rounded shadow-sm bg-light">
            <h4 class="mb-3">Contact Details</h4>
            <ul class="list-unstyled mb-3">
              <li><i class="bi bi-geo-alt me-2"></i>2500 Pungwa Street, Riverside, Kitwe, Zambia</li>
              <li><i class="bi bi-envelope me-2"></i><a href="mailto:ngelechicompanylimited@gmail.com">ngelechicompanylimited@gmail.com</a></li>
              <li><i class="bi bi-envelope me-2"></i><a href="mailto:ngelechicompanylimted@yahoo.com">ngelechicompanylimted@yahoo.com</a></li>
              <li><i class="bi bi-phone me-2"></i>+260 978 265 000</li>
              <li><i class="bi bi-phone me-2"></i>+260 968 525 857</li>
            </ul>
            <div class="social-links mt-3">
              <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="me-2"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form-box p-4 rounded shadow-sm bg-white">
            <h4 class="mb-3">Send Us a Message</h4>
            <form id="contactMailForm" onsubmit="return openMailClient();">
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
            <script>
              function openMailClient() {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var subject = document.getElementById('subject').value;
                var message = document.getElementById('message').value;
                var mailto = 'mailto:ngelechicompanylimited@gmail.com'
                  + '?subject=' + encodeURIComponent(subject)
                  + '&body=' + encodeURIComponent('Name: ' + name + '\nEmail: ' + email + '\n\n' + message);
                window.location.href = mailto;
                return false;
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require 'foot.php'; ?>