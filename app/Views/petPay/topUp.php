<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <div class="container h100">
        <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <h3 class="my-5">TopUp Saldo</h3>
        <table class="table">
            <tr>
                <th scope="col">Bank</th>
                <th scope="row">PetPay</th>
            </tr>
            <tr>
                <th scope="col">Name</th>
                <td><?= $user['name']; ?></td>
            </tr>
            <tr>
                <th scope="col">Saldo</th>
                <td><?= $akun['saldo']; ?></td>
            </tr>
            <tr>
                <th scope="col">No.Rekening</th>
                <td><?= $akun['no_rek']; ?></td>                            
            </tr>
        </table>

        <form action="/petPay/topUp" method="post">
        <div class="mb-3 col-6">
            <label for="saldo" class="form-label">Nominal </label>
            <input type="text" class="form-control" id="saldo" name="saldo" >
        </div>
        <button class="btn btn-outline-success" type="submit">TopUp</button>
        </form>

    </div>
<?= $this->endSection(); ?>