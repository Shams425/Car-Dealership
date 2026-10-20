<?php 
include 'includes/header.php'; 

// Local carousel data using your downloaded local car images
$sliderCars = [
    ["name" => "BMW M4 Competition", "tagline" => "Pure adrenaline & unmatched performance.", "image" => "assets/images/car1.avif"],
    ["name" => "Audi A6 Quattro", "tagline" => "Elegance meets everyday intelligent power.", "image" => "assets/images/car2.avif"],
    ["name" => "Mercedes-Benz C300", "tagline" => "Luxury defined in every single detail.", "image" => "assets/images/car3.avif"]
];

$testimonials = [
    ["name" => "Sarah Jenkins", "comment" => "Found my dream BMW within minutes. The test-drive booking process was seamless!", "car" => "BMW M4"],
    ["name" => "Michael Chang", "comment" => "Incredible customer service and transparent pricing. Highly recommend AutoPrime.", "car" => "Audi A6"],
    ["name" => "David Miller", "comment" => "The easiest car buying experience I've ever had. Professional staff from start to finish.", "car" => "Mercedes C300"]
];
?>

<!-- 1. HERO SLIDER SECTION -->
<div id="heroCarousel" class="carousel slide carousel-fade shadow" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
        <?php foreach ($sliderCars as $index => $car): ?>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $index; ?>" <?= $index === 0 ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $index + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
    
    <div class="carousel-inner">
        <?php foreach ($sliderCars as $index => $car): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>" style="height: 550px;">
                <img src="<?= $car['image']; ?>" class="d-block w-100 h-100" style="object-fit: cover;" alt="<?= $car['name']; ?>">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-70 rounded p-4 mb-5 shadow-lg">
                    <h1 class="display-4 fw-bold text-white"><?= $car['name']; ?></h1>
                    <p class="lead text-light"><?= $car['tagline']; ?></p>
                    <a href="catalog.php" class="btn btn-primary btn-lg mt-2 px-4 shadow rounded-pill">Explore Inventory</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- 2. WHY CHOOSE US SECTION -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose AutoPrime?</h2>
            <p class="text-muted">We provide a premium, transparent, and hassle-free car buying experience.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-light">
                    <div class="display-5 text-primary mb-3">🛡️</div>
                    <h4 class="fw-bold">150-Point Inspection</h4>
                    <p class="text-muted mb-0">Every vehicle in our catalog goes through rigorous mechanical and safety checks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-light">
                    <div class="display-5 text-primary mb-3">📅</div>
                    <h4 class="fw-bold">Instant Test-Drive Booking</h4>
                    <p class="text-muted mb-0">Schedule your test drive online in seconds with instant confirmation.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-light">
                    <div class="display-5 text-primary mb-3">🤝</div>
                    <h4 class="fw-bold">Certified Warranty</h4>
                    <p class="text-muted mb-0">Drive off with complete peace of mind with our comprehensive dealer warranty.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CLIENT REVIEWS SECTION -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Clients Say</h2>
            <p class="text-muted">Hear from drivers who found their dream cars with us.</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <?php foreach ($testimonials as $index => $t): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="card p-5 shadow-sm border-0 rounded-4 bg-white">
                                    <p class="fs-4 fst-italic text-secondary mb-4">"<?= $t['comment']; ?>"</p>
                                    <h5 class="fw-bold mb-1"><?= $t['name']; ?></h5>
                                    <span class="text-primary small">Purchased: <?= $t['car']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>
    </div>
</section>

<!-- 4. CALL TO ACTION SECTION -->
<section class="bg-dark text-white py-5 text-center">
    <div class="container py-4">
        <h2 class="fw-bold mb-3">Ready to Drive Your Dream Car?</h2>
        <p class="text-muted mb-4">Browse through our updated local inventory and book your test drive today.</p>
        <a href="catalog.php" class="btn btn-primary btn-lg px-5 rounded-pill shadow">View Full Catalog</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>