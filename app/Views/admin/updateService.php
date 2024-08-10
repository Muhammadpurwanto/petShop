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

            <h2 class="text-center mb-5">Form Update Service</h2>
            <form action="/admin/updateService/<?= $service['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($service['name']) ? $service['name'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= isset($service['description']) ? $service['description'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= isset($service['price']) ? $service['price'] : ''; ?>">
                </div>
                <input type="hidden" name="old_image" value="<?= isset($service['image']) ? $service['image'] : ''; ?>">
                
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>