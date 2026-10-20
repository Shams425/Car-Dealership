<?php 
include 'includes/header.php'; 

// Shared inventory array (Will be replaced with MySQL database query later)
$cars = [
    1 => ["name" => "BMW M4 Competition", "year" => 2023, "transmission" => "Automatic", "price" => 74500, "engine" => "3.0L Twin-Turbo Inline-6", "hp" => "503 HP", "image" => "assets/images/car1.avif"],
    2 => ["name" => "Audi A6 Quattro", "year" => 2022, "transmission" => "Automatic", "price" => 48000, "engine" => "2.0L Turbocharged 4-Cylinder", "hp" => "261 HP", "image" => "assets/images/car2.avif"],
    3 => ["name" => "Mercedes-Benz C300", "year" => 2023, "transmission" => "Automatic", "price" => 51200, "engine" => "2.0L Turbo Inline-4 with Hybrid Assist", "hp" => "255 HP", "image" => "assets/images/car3.avif"],
    4 => ["name" => "Ford Mustang GT", "year" => 2022, "transmission" => "Manual", "price" => 42000, "engine" => "5.0L Ti-VCT V8", "hp" => "450 HP", "image" => "assets/images/car4.avif"],
    5 => ["name" => "Porsche 911 Carrera", "year" => 2024, "transmission" => "Automatic", "price" => 114000, "engine" => "3.0L Twin-Turbocharged Boxer 6", "hp" => "379 HP", "image" => "assets/images/car5.avif"],
    6 => ["name" => "Tesla Model S Plaid", "year" => 2023, "transmission" => "Automatic", "price" => 89900, "engine" => "Tri-Motor All-Electric", "hp" => "1,020 HP", "image" => "assets/images/car6.avif"],
    7 => ["name" => "Chevrolet Corvette Z06", "year" => 2023, "transmission" => "Automatic", "price" => 105000, "engine" => "5.5L LT6 DOHC V8", "hp" => "670 HP", "image" => "assets/images/car7.avif"],
    8 => ["name" => "Lexus ES 350", "year" => 2022, "transmission" => "Automatic", "price" => 43100, "engine" => "3.5L V6", "hp" => "302 HP", "image" => "assets/images/car8.avif"],
    9 => ["name" => "Range Rover Sport", "year" => 2023, "transmission" => "Automatic", "price" => 83000, "engine" => "3.0L Turbo Mild Hybrid i6", "hp" => "395 HP", "image" => "assets/images/car9.avif"],
    10 => ["name" => "Volkswagen Golf GTI", "year" => 2022, "transmission" => "Manual", "price" => 31500, "engine" => "2.0L TSI Turbo 4-Cylinder", "hp" => "241 HP", "image" => "assets/images/car10.avif"],
    11 => ["name" => "Nissan GT-R Nismo", "year" => 2021, "transmission" => "Automatic", "price" => 210000, "engine" => "3.8L Twin-Turbocharged V6", "hp" => "600 HP", "image" => "assets/images/car11.avif"],
    12 => ["name" => "Honda Civic Type R", "year" => 2023, "transmission" => "Manual", "price" => 43700, "engine" => "2.0L VTEC Turbocharged 4-Cyl", "hp" => "315 HP", "image" => "assets/images/car12.avif"]
];

$carId = isset($_GET['id']) ? intval($_GET['id']) : 1;
$car = isset($cars[$carId]) ? $cars[$carId] : $cars[1];

$bookingSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingSuccess = true;
}
?>

<div class="container my-5">
    <div class="row g-5">
        <!-- Car Image & Specs -->
        <div class="col-lg-7">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-4">
                <img src="<?= $car['image']; ?>" class="w-100" style="height: 400px; object-fit: cover;" alt="<?= $car['name']; ?>">
            </div>
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-white">
                <h3 class="fw-bold mb-3">Vehicle Specifications</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between py-3"><span>Engine:</span> <strong class="text-dark"><?= $car['engine']; ?></strong></li>
                    <li class="list-group-item d-flex justify-content-between py-3"><span>Horsepower:</span> <strong class="text-dark"><?= $car['hp']; ?></strong></li>
                    <li class="list-group-item d-flex justify-content-between py-3"><span>Transmission:</span> <strong class="text-dark"><?= $car['transmission']; ?></strong></li>
                    <li class="list-group-item d-flex justify-content-between py-3"><span>Model Year:</span> <strong class="text-dark"><?= $car['year']; ?></strong></li>
                </ul>
            </div>
        </div>

        <!-- Booking Form Column -->
        <div class="col-lg-5">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-white sticky-top" style="top: 2rem;">
                <h2 class="fw-bold text-dark mb-1"><?= $car['name']; ?></h2>
                <h3 class="text-primary fw-bold mb-4">$<?= number_format($car['price']); ?></h3>

                <?php if ($bookingSuccess): ?>
                    <div class="alert alert-success rounded-3" role="alert">
                        <h4 class="alert-heading fw-bold fs-5">Booking Confirmed!</h4>
                        <p class="mb-0">Your test drive for the <strong><?= $car['name']; ?></strong> has been successfully scheduled. Our sales manager will contact you shortly.</p>
                    </div>
                <?php else: ?>
                    <form action="car-detail.php?id=<?= $carId; ?>" method="POST">
                        <h5 class="fw-bold mb-3">Schedule a Test Drive</h5>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Email Address</label>
                            <input type="email" name="email" class="form-control" required placeholder="john@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" required placeholder="+1 (555) 000-0000">
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Preferred Date & Time</label>
                            <input type="datetime-local" name="date" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold shadow">Confirm Test Drive</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>