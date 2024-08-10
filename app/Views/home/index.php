<?= $this->extend('layout/template_pasive'); ?>

<?= $this->section('content'); ?>

    <div class="bg d-flex justify-content-center align-items-center">
        <div class="container text-center text-white">
            <h1 class="mb-4 fs-1">Welcome to Our Website</h1>
            <div>
                <a href="/users/login" class="btn btn-primary btn-lg m-2">Login</a>
                <a href="/users/registrasi" class="btn btn-secondary btn-lg m-2">Register</a>
            </div>
        </div>
    </di>

<?= $this->endSection(); ?>