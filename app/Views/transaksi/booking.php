<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>

    <div class="container">
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

        <form action="/transaksi/service" method="post">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-1 order-lg-1">
                
                <h3 class="my-3">Transaksi</h3>
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
                                    <input type="hidden" name="id_service" value="<?= $service['id']; ?>">
                                    <td><?= isset($service['name']) ? $service['name'] : ''; ?></td>
                                    <td><?= isset($service['price']) ? $service['price'] : ''; ?></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Booking</button>
                    </div>
                
                </div>
                <div class="col-lg-4 col-md-12 order-2 order-lg-2">
                    <div class="card mb-4" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Saldo</h5>
                            <h6 class="card-subtitle mb-2 text-danger">Rp. <?= isset($petPay['saldo']) ? $petPay['saldo'] : ''; ?></h6>
                            <a class="btn btn-outline-success mt-3" href="/petPay/TopUp" class="card-link">TopUp</a>
                        </div>
                    </div>

                    <h5 class="">Pilih Tanggal</h5>
                    <select class="form-select " name="tanggal" style="width: 100%;" aria-label="Size 3 select example">
                        <?php foreach($tanggals as $tanggal): ?>
                            <option value="<?= $tanggal; ?>"><?= $tanggal ?></option>
                        <?php endforeach; ?>
                    </select>  
                    <h5 class=" mt-3">Pilih Jam</h5>
                    <select class="form-select " name="jam" style="width: 100%;" aria-label="Size 3 select example">
                        <?php foreach($jams as $jam): ?>
                            <option value="<?= $jam; ?>"><?= $jam ?></option>
                        <?php endforeach; ?>
                    </select>  
                    <h5 class=" mt-3">Pilih Karyawan</h5>
                    <select class="form-select " name="karyawan" style="width: 100%;" aria-label="Size 3 select example">
                        <?php foreach($karyawans as $karyawan): ?>
                            <option value="<?= $karyawan['id']; ?>"><?= $karyawan['name'] ?></option>
                        <?php endforeach; ?>
                    </select>  
                    <h5 class=" mt-3">Pilih Alamat</h5>
                    <select class="form-select " name="alamat" style="width: 100%;" aria-label="Size 3 select example">
                        <?php foreach($alamats as $alamat): ?>
                            <option value="<?= $alamat['id']; ?>">
                                <?= $alamat['kode_pos']; ?>/<?= $alamat['provinsi']; ?>/<?= $alamat['kabupaten']; ?>/<?= $alamat['kecamatan']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>  
                                
                    <h5 class=" mt-3">Pilih Jasa Kirim</h5>
                    <select class="form-select " name="kurir" id="kurir" style="width: 100%;" aria-label="Size 3 select example">
                        <?php foreach($kurirs as $kurir): ?>
                            <option value="<?= $kurir['id']; ?>"><?= $kurir['name']; ?> (<?= $kurir['price']; ?>)</option>
                        <?php endforeach; ?>
                    </select>                 
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection(); ?>
