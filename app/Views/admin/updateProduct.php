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

            <h2 class="text-center mb-5">Form Update Produk</h2>
            <form action="/admin/updateProduct/<?= $product['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($product['name']) ? $product['name'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= isset($product['description']) ? $product['description'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" value="<?= isset($product['quantity']) ? $product['quantity'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= isset($product['price']) ? $product['price'] : ''; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                        <?php foreach($categories as $category): ?>
                        <input type="radio" class="btn-check" name="category" id="<?= $category['id']; ?>" value="<?= $category['id']; ?>">
                            <label class="btn" for="<?= $category['id']; ?>"><?= $category['name']; ?></label>
                        <?php endforeach; ?>
                </div>

                <input type="hidden" name="old_image" value="<?= isset($product['image']) ? $product['image'] : ''; ?>">
                
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>