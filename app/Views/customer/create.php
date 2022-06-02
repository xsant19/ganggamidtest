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
            <form method="post" action="<?= base_url('customer/store') ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black">TAMBAH DATA BUKU</h4>
                <hr>
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Kode</label>
                    <input type="text" class=" col-sm-3 form-control" id="code" name="code" required value="<?= old('code'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="barcode" class="col-sm-2 col-form-label ">Barcode/ISBN</label>
                    <input type="text" class=" col-sm-5 form-control id=" barcode" name="barcode" required value="<?= old('barcode'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label ">Judul Buku</label>
                    <textarea class="col-sm-6 form-control" id="judul" name="judul" required value="<?= old('judul'); ?>"> </textarea>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label ">Pengarang</label>
                    <input type="name" class="col-sm-6 form-control" id="pengarang" name="pengarang" required value="<?= old('pengarang'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label ">Keterangan</label>
                    <input type="text" class="col-sm-6 form-control" id="keterangan" name="keterangan" required value="<?= old('keterangan'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label ">Harga Buku(Rp.)</label>
                    <input type="text" class="col-sm-4 form-control" id="harga" name="harga" required value="<?= old('harga'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="diskon_beli" class="col-sm-2 col-form-label ">Diskon Beli(%)</label>
                    <input type="text" class="col-sm-2 form-control" id="diskon_beli" name="diskon_beli" required value="<?= old('diskon_beli'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="diskon_jual" class="col-sm-2 col-form-label ">Diskon Jual(%)</label>
                    <input type="text" class="col-sm-2 form-control" id="diskon_jual" name="diskon_jual" required value="<?= old('diskon_jual'); ?>">
                </div>
                <hr>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label ">Kategori</label>
                    <select name="kategori" class="col-sm-5 form-control" id="kategori" required>
                        <option value="KI">Komputer dan Internet</option>
                        <option value="KJ">Komputer dan Jaringan</option>
                        <option value="CL">Cloud</option>
                    </select>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <select name="penerbit" class="col-sm-4 form-control" id="penerbit" required>
                        <option value="Gava">Gava Media</option>
                        <option value="Media">Ingfo Media</option>
                    </select>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="distributor" class="col-sm-2 col-form-label">Distributor</label>
                    <select name="distributor" class="col-sm-5 form-control" id="distributor" required>
                        <option value="CV">CV.Gava Media Yogyakarta</option>
                        <option value="PT">PT.abal-abal</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" value="SIMPAN" class="btn btn-info" />
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>