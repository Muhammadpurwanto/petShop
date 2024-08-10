<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 h100">
    <div class="row">
        <?= $this->include('admin/template/category'); ?>

        <div class="col-12 col-md-10 order-2 order-md-2">
            <?php if(session()->getFlashdata('pesan')): ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mb-3">Daftar Customer</h1>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach($users as $user): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $user['image']; ?>" alt="" width="80"></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['email']; ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
            </div>          
        </div>
    </div>
</div>


<?= $this->endSection(); ?>