<?php include 'head.php'; ?>

<body>
    <?php include 'nav.php'; ?>

    <main class="container py-5">
        <div class="text-center mb-5">
            <h1>Our Location</h1>
            <p class="lead">Visit us and enjoy the taste of Italy</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card bg-dark text-white text-center p-4">
                    <h5>📍 Address</h5>
                    <p>123 Main Street, City Name</p>
                    <h5>⏰ Opening Hours</h5>
                    <p>Mon-Sun: 11:00 AM – 11:00 PM</p>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Embed Google Map -->
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123456!2d-122.419415!3d37.774929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064abcd1234%3A0x123456789abcdef!2sLa+Bella+Trattoria!5e0!3m2!1sen!2sus!4v1234567890"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>