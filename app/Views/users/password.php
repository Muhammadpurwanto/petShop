<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="form-container">
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
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?= \Config\Services::validation()->listErrors(); ?>       
                </div>
            <?php } ?>

            <h2 class="text-center mb-5">Ganti Password</h2> 
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?= \Config\Services::validation()->listErrors(); ?>       
                </div>
            <?php } ?>
            <form action="/users/password" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="old_password">Old Password</label>
                    <input type="password" class="form-control" id="old_password" name="old_password" autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="new_password">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password">
                </div>
                <div class="form-group mb-3">
                    <label for="konfirmasi_password">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>
