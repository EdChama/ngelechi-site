<?php require 'head.php'; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Gallery</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Gallery</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Gallery Section -->
  <section id="gallery" class="gallery section">
    <div class="container" data-aos="fade-up">

      <div class="row g-4">

        <!-- Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item">
            <img src="assets/img/construction/project-2.webp" class="img-fluid" alt="Metropolitan Office Tower">
            <div class="gallery-overlay">
              <div class="overlay-content">
                <span class="category">Commercial</span>
                <span class="status completed">Completed</span>
                <h4>Metropolitan Office Tower</h4>
                <p>Innovative glass facade design with sustainable energy systems and modern workspace solutions.</p>
                <div class="specs">
                  <span><i class="bi bi-building"></i> 32 Floors</span>
                  <span><i class="bi bi-calendar-check"></i> 24 Months</span>
                </div>
                <div class="location">
                  <i class="bi bi-geo-alt-fill"></i> New York, NY
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item">
            <img src="assets/img/construction/project-6.webp" class="img-fluid" alt="Riverside Luxury Homes">
            <div class="gallery-overlay">
              <div class="overlay-content">
                <span class="category">Residential</span>
                <span class="status in-progress">In Progress</span>
                <h4>Riverside Luxury Homes</h4>
                <p>Premium residential development featuring eco-friendly materials and smart home integration.</p>
                <div class="specs">
                  <span><i class="bi bi-house"></i> 24 Units</span>
                  <span><i class="bi bi-calendar-check"></i> 18 Months</span>
                </div>
                <div class="location">
                  <i class="bi bi-geo-alt-fill"></i> Portland, OR
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <div class="gallery-item">
            <img src="assets/img/construction/project-10.webp" class="img-fluid" alt="Highway Bridge Reconstruction">
            <div class="gallery-overlay">
              <div class="overlay-content">
                <span class="category">Infrastructure</span>
                <span class="status completed">Completed</span>
                <h4>Highway Bridge Reconstruction</h4>
                <p>Major infrastructure upgrade enhancing traffic flow and ensuring structural safety standards.</p>
                <div class="specs">
                  <span><i class="bi bi-rulers"></i> 2.5 Miles</span>
                  <span><i class="bi bi-calendar-check"></i> 36 Months</span>
                </div>
                <div class="location">
                  <i class="bi bi-geo-alt-fill"></i> Dallas, TX
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

<style>
  /* ===========================
   GALLERY HOVER EFFECT
=========================== */

  .gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    cursor: pointer;
  }

  .gallery-item img {
    transition: transform 0.5s ease;
    width: 100%;
    display: block;
  }

  .gallery-item:hover img {
    transform: scale(1.08);
  }

  .gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.2));
    display: flex;
    align-items: flex-end;
    padding: 20px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
  }

  .gallery-item:hover .gallery-overlay {
    transform: translateY(0);
  }

  .overlay-content {
    color: #fff;
    width: 100%;
  }

  .overlay-content h4 {
    margin-bottom: 10px;
    font-weight: 600;
  }

  .overlay-content p {
    font-size: 14px;
    margin-bottom: 12px;
  }

  .specs {
    display: flex;
    gap: 15px;
    font-size: 13px;
    margin-bottom: 10px;
  }

  .location {
    font-size: 13px;
    opacity: 0.9;
  }

  .category {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 5px;
  }

  .status {
    font-size: 11px;
    padding: 3px 8px;
    border-radius: 20px;
    margin-left: 8px;
  }

  .status.completed {
    background: #28a745;
  }

  .status.in-progress {
    background: #ffc107;
    color: #000;
  }

  .status.planning {
    background: #17a2b8;
  }
</style>

<?php require 'foot.php'; ?>