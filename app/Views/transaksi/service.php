<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

<div class="container h100">
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

    <form action="/transaksi/bayarService" method="post">
        <!-- DATA ID TRANSAKSI -->
        <input type="hidden" name="petPay" value="<?= $petPay['id']; ?>">
        <input type="hidden" name="kurir" value="<?= $kurir['id']; ?>">
        <input type="hidden" name="karyawan" value="<?= $karyawan['id']; ?>">
        <input type="hidden" name="service" value="<?= $service['id']; ?>">
        <input type="hidden" name="alamat" value="<?= $alamat['id']; ?>">
        <input type="hidden" name="tanggal" value="<?= $tanggal; ?>">
        <input type="hidden" name="jam" value="<?= $jam; ?>">
        <input type="hidden" name="sisaSaldo" value="<?= $sisaSaldo; ?>">

        <div class="row">
            <div class="col-lg-8 col-md-12 order-1 order-lg-1 mb-4">
                <h3 class="my-3">Transaksi</h3>
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis Jasa</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= isset($service['name']) ? $service['name'] : ''; ?></td>
                                <td><?= isset($service['price']) ? $service['price'] : ''; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">checkout</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 order-2 order-lg-2">
                <div class="card mb-4" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Saldo: <span class="text-danger">Rp. <?= isset($petPay['saldo']) ? $petPay['saldo'] : ''; ?></span></h5>
                        <label for="">Total Harga: </label>
                        <input type="text" name="totalHarga" value="<?= isset($totalHarga) ? $totalHarga : ''; ?>" style="border:none; width: 10rem" disabled>
                        <label for="">Biaya Kurir: </label>
                        <input type="text" name="kurir" value="<?= isset($kurir['price']) ? $kurir['price'] : ''; ?>" style="border:none; width: 10rem" disabled>
                        <hr>
                        <label for="">Sisa Saldo: </label>
                        <input type="text" name="sisaSaldo" value="<?= isset($sisaSaldo) ? $sisaSaldo : ''; ?>" style="border:none; width: 10rem" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <h5 class="">Tanggal</h5>
                    <select class="form-select " name="tanggal" style="width: 100%;" aria-label="Size 3 select example">
                        <option value="<?= $tanggal; ?>"><?= $tanggal; ?></option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <h5 class="">Jam</h5>
                    <select class="form-select " name="jam" style="width: 100%;" aria-label="Size 3 select example">
                        <option value="<?= $jam; ?>"><?= $jam; ?></option>
                    </select>
                </div>

                <div class="mb-3">
                    <h5 class="">Karyawan</h5>
                    <select class="form-select " name="karyawan" style="width: 100%;" aria-label="Size 3 select example">
                        <option value="<?= $karyawan['id']; ?>"><?= $karyawan['name']; ?></option>
                    </select>
                </div>

                <div class="mb-3">
                    <h5 class="">Alamat</h5>
                    <select class="form-select " name="alamat" style="width: 100%;" aria-label="Size 3 select example">
                        <option value="<?= $alamat['id']; ?>">
                            <?= $alamat['kode_pos']; ?>/<?= $alamat['provinsi']; ?>/<?= $alamat['kabupaten']; ?>/<?= $alamat['kecamatan']; ?>
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <h5 class="">Jasa Kirim</h5>
                    <select class="form-select " name="kurir" id="kurir" style="width: 100%;" aria-label="Size 3 select example">
                        <option value="<?= $kurir['id']; ?>"><?= $kurir['name']; ?> (<?= $kurir['price']; ?>)</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
