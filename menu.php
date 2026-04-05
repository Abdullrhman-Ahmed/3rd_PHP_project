<?php include 'head.php'; ?>

<body>
    <?php include 'nav.php'; ?>

    <main class="container py-5">
        <div class="text-center mb-5">
            <h1>Our Menu</h1>
            <p class="lead">Discover the flavors of La Bella Trattoria</p>
        </div>

        <div class="row g-4">
            <!-- Dish 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="./image/IMG-20240410-WA0095.jpg" class="card-img-top" alt="Spaghetti Carbonara">
                    <div class="card-body">
                        <h5 class="card-title">Spaghetti Carbonara</h5>
                        <p class="card-text">Classic creamy pasta with pancetta and parmesan.</p>
                        <p class="fw-bold">$12.99</p>
                    </div>
                </div>
            </div>

            <!-- Dish 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="./image/IMG-20240410-WA0096.jpg" class="card-img-top" alt="Margherita Pizza">
                    <div class="card-body">
                        <h5 class="card-title">Margherita Pizza</h5>
                        <p class="card-text">Tomato, mozzarella, fresh basil, and olive oil.</p>
                        <p class="fw-bold">$10.99</p>
                    </div>
                </div>
            </div>

            <!-- Dish 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="./image/IMG-20240410-WA0097.jpg" class="card-img-top" alt="Tiramisu">
                    <div class="card-body">
                        <h5 class="card-title">Tiramisu</h5>
                        <p class="card-text">Delicious coffee-flavored Italian dessert.</p>
                        <p class="fw-bold">$6.99</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>