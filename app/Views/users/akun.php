<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 h100">
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

    <div class="row">
        <div class="col-12 col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <h3>Category</h3>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/alamat">Alamat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/users/password">Ganti Password</a>
                </li>        
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/petPay/add">Akun PetPay</a>
                </li>        
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/transaksi/history">History</a>
                </li>        
            </ul>
        </div>

        <div class="col-12 col-md-9 d-flex justify-content-center align-items-center">
            <div class="form-container w-100">
                <h2 class="text-center mb-5">Update Profile</h2>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= \Config\Services::validation()->listErrors(); ?>       
                    </div>
                <?php endif; ?>
                <form action="/users/akun" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($user['email']) ? $user['email'] : ''; ?>">
                    </div>
                    <!-- hidden password -->
                    <input type="hidden" class="form-control" id="password" name="password" value="<?= isset($user['password']) ? $user['password'] : ''; ?>">

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= isset($user['name']) ? $user['name'] : ''; ?>">
                    </div>

                    <!-- hidden old_image -->
                    <input type="hidden" name="old_image" value="<?= isset($user['image']) ? $user['image'] : ''; ?>">

                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" >
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
