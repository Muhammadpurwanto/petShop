<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <div class="container h100">
    <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php if($akun == null){ ?>
            <h3 class="my-3">Daftar PetPay</h3>
            <form action="/petPay/add" method="post">
                <ul class="list-group list-group-flush col-sm-8">
                    <li class="list-group-item">Name : <?= $user['name']; ?></li>
                    <li class="list-group-item">Email : <?= $user['email']; ?></li>
                    <li class="list-group-item">Bank : PetPay</li>
                    <?php $rek =  rand(00000000000,99999999999); ?>
                    <li class="list-group-item">No.rek : <?= $rek; ?>
                        <input type="hidden" name="rek" value="<?= $rek; ?>">
                    </li>
                    <li class="list-group-item"></li>
                </ul>            
                    <button class="btn btn-primary mt-3" type="submit">Daftar</button>
            </form>
        <?php }else{; ?>
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
                    <tr>
                        <th scope="col">TopUp</th>
                        <td><a class="btn btn-outline-success" href="/petPay/topUp">TopUp</a></td>
                    </tr>
            </table>

        <?php } ?>

    </div>
<?= $this->endSection(); ?>