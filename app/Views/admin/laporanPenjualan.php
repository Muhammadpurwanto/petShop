<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 h100">
    <div class="row">
        <?= $this->include('admin/template/category'); ?>
        
        <div class="col-12 col-md-10 order-2 order-md-2">
            <h1 class="text-center mb-4">Laporan Mingguan Penjualan Produk</h1>
            <div class="card mx-auto" style="max-width: 400px;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Produk Terjual Minggu Ini:</h5>
                    <p class="card-text fs-1 text-center"><?= $results ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>