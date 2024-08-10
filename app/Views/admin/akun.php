<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container h100"> 
    <div class="row">
        <div class="col-12 col-md-2 order-1 order-md-1 mt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <h3>Category</h3>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin/password">Ganti Password</a>
                </li>        
            </ul>
        </div>
    
        <div class="col-12 col-md-10 order-2 order-md-2 mt-3">
            <div class="d-flex justify-content-center align-items-center">
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

                    <h2 class="text-center mb-5">Update Profile</h2>
                    <form action="/admin/akun" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" autofocus value="<?= isset($admin['email']) ? $admin['email'] : ''; ?>">
                        </div>

                        <input type="hidden" class="form-control" id="password" name="password" value="<?= isset($admin['password']) ? $admin['password'] : ''; ?>">
                        
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= isset($admin['name']) ? $admin['name'] : ''; ?>">
                        </div>

                        <input type="hidden"name="old_image" value="<?= isset($admin['image']) ? $admin['image'] : ''; ?>">

                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>