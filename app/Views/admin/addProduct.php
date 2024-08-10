<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-center align-items-center mt-3 h100">
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

        <h2 class="text-center mb-5">Form Tambah Produk</h2>
        <form action="/admin/addProduct" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="id">Id</label>
                <input type="id" class="form-control" id="id" name="id" autofocus value="<?= isset($input_data['id']) ? $input_data['id'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="name" class="col-sm-1 col-form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($input_data['name']) ? $input_data['name'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="description" class="col-sm-1 col-form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= isset($input_data['description']) ? $input_data['description'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="quantity" class="col-sm-1 col-form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="<?= isset($input_data['quantity']) ? $input_data['quantity'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="price" class="col-sm-1 col-form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= isset($input_data['price']) ? $input_data['price'] : ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="category" class="col-sm-1 col-form-label">Category</label>
                    <?php foreach($categories as $category): ?>
                        <input type="radio" class="btn-check" name="category" id="<?= $category['id']; ?>" value="<?= $category['id']; ?>">
                        <label class="btn" for="<?= $category['id']; ?>"><?= $category['name']; ?></label>
                    <?php endforeach; ?>
            </div>
            <div class="form-group mb-3">
                <label for="image" class="col-sm-1 col-form-label">Image</label>           
                <input type="file" class="form-control" id="image" name="image" value="<?= isset($input_data['image']) ? $input_data['image'] : ''; ?>">
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>