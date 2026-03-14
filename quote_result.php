<?php
include 'head.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Quote Request Sent</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Success</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Success Section -->
    <section class="section">

        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <div class="p-5 shadow rounded bg-white">

                        <div class="mb-4">

                            <i class="bi bi-check-circle-fill text-success" style="font-size:70px;"></i>

                        </div>

                        <h2 class="fw-bold mb-3">Your Quote Request Has Been Sent</h2>

                        <p class="lead">
                            Thank you for contacting <strong>Ngelechi</strong>.
                            Your request has been successfully submitted and our team will review your project details.
                        </p>

                        <p>
                            One of our representatives will get back to you within <strong>24–48 hours</strong> with further information regarding your request.
                        </p>

                        <div class="mt-4">

                            <a href="index.php" class="btn btn-primary me-2">
                                Return to Home
                            </a>

                            <a href="mailto:sales@ngelechi.com" class="btn btn-outline-primary">
                                Email our sales team
                            </a>

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