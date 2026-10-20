<?php 
include 'includes/header.php'; 

// Simulated Sales Report Data
$sales = [
    ["id" => 101, "car" => "BMW M4 Competition", "buyer" => "Robert Fox", "date" => "2026-03-10", "amount" => 74500],
    ["id" => 102, "car" => "Audi A6 Quattro", "buyer" => "Jane Cooper", "date" => "2026-03-08", "amount" => 48000],
    ["id" => 103, "car" => "Tesla Model S Plaid", "buyer" => "Wade Warren", "date" => "2026-03-02", "amount" => 89900]
];

$totalRevenue = array_sum(array_column($sales, 'amount'));
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Admin Management Dashboard</h2>
        <a href="catalog.php" class="btn btn-outline-dark rounded-pill">View Public Catalog</a>
    </div>

    <!-- Quick Stats Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-primary text-white">
                <h6 class="text-uppercase small fw-bold opacity-75">Total Revenue</h6>
                <h2 class="fw-bold mb-0">$<?= number_format($totalRevenue); ?></h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-dark text-white">
                <h6 class="text-uppercase small fw-bold opacity-75">Total Cars in Stock</h6>
                <h2 class="fw-bold mb-0">12 Vehicles</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-success text-white">
                <h6 class="text-uppercase small fw-bold opacity-75">Completed Sales</h6>
                <h2 class="fw-bold mb-0"><?= count($sales); ?> Vehicles</h2>
            </div>
        </div>
    </div>

    <!-- Inventory Management Section -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-5 bg-white">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">Manage Inventory Catalog</h4>
            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#addCarModal">+ Add New Car</button>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Vehicle Name</th>
                        <th>Year</th>
                        <th>Transmission</th>
                        <th>Price</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="fw-bold">BMW M4 Competition</td>
                        <td>2023</td>
                        <td>Automatic</td>
                        <td>$74,500</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary rounded-pill px-3">Edit</button>
                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="fw-bold">Audi A6 Quattro</td>
                        <td>2022</td>
                        <td>Automatic</td>
                        <td>$48,000</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary rounded-pill px-3">Edit</button>
                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Sales Report Section -->
    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
        <h4 class="fw-bold mb-3">Recent Sales Report</h4>
        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Vehicle Sold</th>
                        <th>Buyer Name</th>
                        <th>Date</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sales as $sale): ?>
                    <tr>
                        <td>#<?= $sale['id']; ?></td>
                        <td class="fw-bold"><?= $sale['car']; ?></td>
                        <td><?= $sale['buyer']; ?></td>
                        <td><?= $sale['date']; ?></td>
                        <td class="text-end fw-bold text-success">$<?= number_format($sale['amount']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Car Modal Form -->
<div class="modal fade" id="addCarModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header">
                <h5 class="fw-bold modal-title">Add New Vehicle to Inventory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="admin.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Vehicle Make & Model</label>
                        <input type="text" class="form-control" placeholder="e.g. Porsche 911 GT3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Price ($)</label>
                        <input type="number" class="form-control" placeholder="e.g. 150000">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Model Year</label>
                        <input type="number" class="form-control" placeholder="2024">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Transmission</label>
                        <select class="form-select">
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2">Save Vehicle</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>