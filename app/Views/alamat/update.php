<?= $this->extend('layout/template_active'); ?>

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

            <h2 class="text-center mb-5">Update Address</h2>
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?= \Config\Services::validation()->listErrors(); ?>       
                </div>
            <?php } ?>
            <form action="/alamat/update/<?= $alamat['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" autofocus value="<?= $alamat['provinsi']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $alamat['kabupaten']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $alamat['kecamatan']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="desa">Desa</label>
                    <input type="text" class="form-control" id="desa" name="desa" value="<?= $alamat['desa']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="detail">Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail" value="<?= $alamat['detail']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="kode_pos">kode_pos</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $alamat['kode_pos']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?= $this->endSection(); ?>