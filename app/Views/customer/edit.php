<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Soal Nomor Genap</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Check Your Entry Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('customer/update/' . $customer->code) ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black">TAMBAH DATA BUKU</h4>
                <hr>
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Kode</label>
                    <input type="text" class=" col-sm-3 form-control" id="code" name="code" required="<?= $customer->code; ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="barcode" class="col-sm-2 col-form-label ">Barcode/ISBN</label>
                    <input type="text" class=" col-sm-5 form-control id=" barcode" name="barcode" required value="<?= $customer->barcode; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                    <textarea class="col-sm-8 form-control" id="judul" name="judul"><?= $customer->judul; ?></textarea>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label ">Pengarang</label>
                    <input type="name" class="col-sm-6 form-control" id="pengarang" name="pengarang" required value="<?= $customer->pengarang; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label ">Keterangan</label>
                    <input type="text" class="col-sm-6 form-control" id="keterangan" name="keterangan" required value="<?= $customer->keterangan; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label ">Harga</label>
                    <input type="text" class="col-sm-4 form-control" id="harga" name="harga" required value="<?= $customer->harga; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="diskon_beli" class="col-sm-2 col-form-label ">Diskon Beli(%)</label>
                    <input type="text" class="col-sm-2 form-control" id="diskon_beli" name="diskon_beli" required value="<?= $customer->diskon_beli; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="diskon_jual" class="col-sm-2 col-form-label ">Diskon Jual(%)</label>
                    <input type="text" class="col-sm-2 form-control" id="diskon_jual" name="diskon_jual" required value="<?= $customer->diskon_beli; ?>" />
                </div>
                <hr>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label ">Kategori</label>
                    <select name="kategori" class="col-sm-2 form-control" id="kategori">
                        <option value="None" <?= ($customer->kategori == "KI" ? "selected" : ""); ?>>Komputer dan Internet</option>
                        <option value="Mobil" <?= ($customer->kategori == "KJ" ? "selected" : ""); ?>>Komputer dan Jaringan</option>
                        <option value="Motor" <?= ($customer->kategori == "CL" ? "selected" : ""); ?>>Cloud</option>
                    </select>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label ">Penerbit</label>
                    <select name="penerbit" class="col-sm-6 form-control" id="penerbit">
                        <option value="Gava" <?= ($customer->penerbit == "Gava" ? "selected" : ""); ?>>Gava Media</option>
                        <option value="Media" <?= ($customer->penerbit == "Media" ? "selected" : ""); ?>>Ingfo Media</option>
                    </select>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="distributor" class="col-sm-2 col-form-label ">Distributor</label>
                    <select name="distributor" class="col-sm-6 form-control" id="distributor">
                        <option value="CV" <?= ($customer->distributor == "CV" ? "selected" : ""); ?>>CV.Gava Media Yogyakarta</option>
                        <option value="PT" <?= ($customer->distributor == "PT" ? "selected" : ""); ?>>PT.abal-abal</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>