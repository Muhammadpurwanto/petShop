<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-center align-items-center h100">
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

        <h2 class="text-center mb-5">Form Register Admin</h2>
        <form action="/admin/registrasi" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" autofocus value="<?= isset($input_data['email']) ? $input_data['email'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($input_data['name']) ? $input_data['name'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= isset($input_data['image']) ? $input_data['image'] : ''; ?>">
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>