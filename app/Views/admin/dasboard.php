<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 h100">
    <div class="row">
        <?= $this->include('admin/template/category'); ?>

        <div class="col-12 col-md-10 order-2 order-md-2 ">
            <?php if(session()->getFlashdata('pesan')): ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mb-3">Selamat Datang Admin</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card text-bg-info mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Daftar Customer</h5>
                            <p class="card-text">Klik Go untuk mengelola daftar Customer</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="/admin/users" class="btn btn-danger btn-lg">Go</a>
                            </div>
                        </div>
                    </div>
                </div>              
                <div class="col">
                    <div class="card text-bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Daftar Produk</h5>
                            <p class="card-text">Klik Go untuk mengelola daftar Product</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="/admin/products" class="btn btn-danger btn-lg">Go</a>
                            </div>
                        </div>
                    </div>              
                </div>
                <div class="col">
                    <div class="card text-bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Service</h5>
                            <p class="card-text">Klik Go untuk mengelola daftar Service</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="/admin/service" class="btn btn-danger btn-lg">Go</a>
                            </div>
                        </div>
                    </div>              
                </div>
                <div class="col">
                    <div class="card text-bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Laporan Penjualan</h5>
                            <p class="card-text">Klik Go untuk mengelola penjualan</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="/admin/weeklyReport" class="btn btn-danger btn-lg">Go</a>
                            </div>
                        </div>
                    </div>              
                </div>
                <div class="col">
                    <div class="card text-bg-warning mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Register Admin</h5>
                            <p class="card-text">Klik Go untuk mengelola daftar Admin</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="/admin/registrasi" class="btn btn-danger btn-lg">Go</a>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
