<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <div class="bg d-flex justify-content-center align-items-center">
        <div class="container text-center text-white">
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="/products" class="btn active h-100">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Klik Here!!</h6>
                            <p class="card-text">Kami menyediakan kebutuhan dan perlengkapan hewan peliharaan berkualitas tinggi dan lain-lain.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/service" class="btn active h-100">
                        <div class="card-body">
                            <h5 class="card-title">Service</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Klik Here!!</h6>
                            <p class="card-text">Kami menawarkan layanan grooming profesional, fasilitas pengasuhan yang nyaman dan lain-lain.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/about" class="btn active h-100">
                        <div class="card-body">
                            <h5 class="card-title">About Me</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Klik Here!!</h6>
                            <p class="card-text">Selamat datang di PetShop kami, rumah nyaman bagi teman-teman hewan peliharaan Anda.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>


    
