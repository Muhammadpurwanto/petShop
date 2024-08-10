<?= $this->extend('layout/template_pasive'); ?>

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

            <h2 class="text-center mb-5">Login User</h2>
            <form action="/users/login" method="post">
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>


