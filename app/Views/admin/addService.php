<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-center align-items-center h100">
    <div class="form-container">
        <?php if(isset($validation)){ ?>
            <div class="alert alert-danger" role="alert">
                <?= \Config\Services::validation()->listErrors(); ?>       
            </div>
        <?php } ?>
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

        <h2 class="text-center mb-5">Form Tambah Service</h2>
        <form action="/admin/addService" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id" name="id" autofocus value="<?= isset($input_data['id']) ? $input_data['id'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($input_data['name']) ? $input_data['name'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= isset($input_data['description']) ? $input_data['description'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= isset($input_data['price']) ? $input_data['price'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>           
                <input type="file" class="form-control" id="image" name="image" value="<?= isset($input_data['image']) ? $input_data['image'] : ''; ?>">
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>