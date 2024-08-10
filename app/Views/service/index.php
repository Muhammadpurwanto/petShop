<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5" style="min-height: 100vh;">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
        <?php foreach($services as $service): ?>
        <div class="col">
            <div class="card border-warning mb-3 h-100">
                <img src="/img/<?= $service['image']; ?>" class="card-img-top" alt="..." style="height: 300px; object-fit: cover;">
                <div class="card-header text-center">
                    <h5 class="card-title"><?= $service['name']; ?></h5>
                </div>
                <div class="card-body text-center d-flex flex-column">
                    <p class="card-text"><?= $service['description']; ?></p>
                    <h5 class="card-title">Rp. <?= $service['price']; ?></h5>
                    <a href="/transaksi/booking/<?= $service['id']; ?>" class="btn btn-outline-warning mt-auto">Booking</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>


