<?php 
include 'includes/header.php'; 

$cars = [
    ["id" => 1, "name" => "BMW M4 Competition", "year" => 2023, "transmission" => "Automatic", "price" => 74500, "image" => "assets/images/car1.avif"],
    ["id" => 2, "name" => "Audi A6 Quattro", "year" => 2022, "transmission" => "Automatic", "price" => 48000, "image" => "assets/images/car2.avif"],
    ["id" => 3, "name" => "Mercedes-Benz C300", "year" => 2023, "transmission" => "Automatic", "price" => 51200, "image" => "assets/images/car3.avif"],
    ["id" => 4, "name" => "Ford Mustang GT", "year" => 2022, "transmission" => "Manual", "price" => 42000, "image" => "assets/images/car4.avif"],
    ["id" => 5, "name" => "Porsche 911 Carrera", "year" => 2024, "transmission" => "Automatic", "price" => 114000, "image" => "assets/images/car5.avif"],
    ["id" => 6, "name" => "Tesla Model S Plaid", "year" => 2023, "transmission" => "Automatic", "price" => 89900, "image" => "assets/images/car6.avif"],
    ["id" => 8, "name" => "Lexus ES 350", "year" => 2022, "transmission" => "Automatic", "price" => 43100, "image" => "assets/images/car8.avif"],
    ["id" => 9, "name" => "Range Rover Sport", "year" => 2023, "transmission" => "Automatic", "price" => 83000, "image" => "assets/images/car9.avif"],
    ["id" => 11, "name" => "Nissan GT-R Nismo", "year" => 2021, "transmission" => "Automatic", "price" => 210000, "image" => "assets/images/car11.avif"],
    ["id" => 12, "name" => "Honda Civic Type R", "year" => 2023, "transmission" => "Manual", "price" => 43700, "image" => "assets/images/car12.avif"]
];
?>

<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">AutoPrime Local Verified Inventory</h2>

    <!-- Car Listing Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        <?php foreach ($cars as $car): ?>
        <div class="col">
            <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
                <img src="<?= $car['image']; ?>" class="card-img-top" style="height: 220px; object-fit: cover;" alt="<?= $car['name']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold text-dark"><?= $car['name']; ?></h5>
                    <p class="text-muted mb-1"><?= $car['year']; ?> | <?= $car['transmission']; ?> | Petrol</p>
                    <h4 class="text-primary fw-bold mb-3">$<?= number_format($car['price']); ?></h4>
                    <a href="car-detail.php?id=<?= $car['id']; ?>" class="btn btn-outline-primary mt-auto rounded-pill px-4">View Details & Book</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>