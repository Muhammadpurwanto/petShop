<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 h100">
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <form action="/transaksi" method="post">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h3 class="my-3">Keranjang</h3>
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            <?php if(isset($products)): ?>
                                <?php foreach($products as $product): ?>
                                    <tr>
                                        <th scope="row"><?= ++$i; ?></th>
                                        <td><?= isset($product->name) ? $product->name : ''; ?></td>
                                        <td><img src="/img/<?= $product->image; ?>" width="50" alt=""></td>
                                        <td><?= isset($product->price) ? $product->price : ''; ?></td>
                                        <td>
                                            <input class="form-control text-center" type="text" name="jumlah[]" value="<?= isset($product->jumlah) ? $product->jumlah : ''; ?>">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="<?= isset($product->id) ? $product->id : ''; ?>" name="keranjang[]">
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Checkout</button>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title">Saldo</h5>
                        <h6 class="card-subtitle mb-2 text-danger">Rp. <?= isset($petPay['saldo']) ? $petPay['saldo'] : ''; ?></h6>
                        <a class="btn btn-outline-success mt-3" href="/petPay/TopUp">TopUp</a>
                    </div>
                </div>

                <h5 class="ms-3">Pilih Alamat</h5>
                <select class="form-select ms-3 mb-3" name="alamat">
                    <?php foreach($alamats as $alamat): ?>
                        <option value="<?= $alamat['id']; ?>">
                            <?= $alamat['kode_pos']; ?>/<?= $alamat['provinsi']; ?>/<?= $alamat['kabupaten']; ?>/<?= $alamat['kecamatan']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <h5 class="ms-3">Pilih Jasa Kirim</h5>
                <select class="form-select ms-3" name="kurir">
                    <?php foreach($kurirs as $kurir): ?>
                        <option value="<?= $kurir['id']; ?>">
                            <?= $kurir['name']; ?> (<?= $kurir['price']; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
